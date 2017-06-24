<?php

namespace Worthem\Http\Controllers;


use Worthem\View;
use Worthem\App;
use Worthem\Wordpress;
use Worthem\Post;
class PageController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return $this->view->from('page.home')->with([
			'mp4' => esc_url(get_field('videoMp4')['url']),
			'post' => new Post(get_post()),
			'content' => App::get('content'),
            'recentPosts' => Post::fromArray(wp_get_recent_posts( array(
                'numberposts' => 3
            ), OBJECT ))
        ])->load();

    }

    public function default()
    {
        return $this->view->from('page.default')->with([
            'post' => new Post(get_post())
        ])->load();
    }
}