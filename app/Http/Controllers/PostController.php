<?php

namespace Worthem\Http\Controllers;


use Worthem\View;
use Worthem\App;
use Worthem\Wordpress;
use Worthem\Post;
class PostController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function default()
    {
        return $this->view->from('page.default')->with([
            'post' => new Post(get_post())
        ])->load();
    }

    public function archive()
    {
        return $this->view->from('page.default')->with([
            'post' => new Post(get_post())
        ])->load();
    }
}