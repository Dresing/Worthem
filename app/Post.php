<?php 

namespace Worthem;


use Exception;
use Worthem\App;

class Post
{

    public $id;
    public $obj;
	public function __construct($postObj)
	{
        //A post id was passed
        if($postObj)
        {
            $this->obj = $postObj;
            $this->id = $this->obj->ID;
        }

    }

    public static function fromArray(Array $posts)
    {
        return array_map(function($post){
            return new Post($post);
        }, $posts);
    }

    public function getTitle()
    {
        return wp_kses_post(get_the_title($this->id));
    }

	public function getExcerpt($size = 30)
	{
		return get_the_excerpt($this->id) ?  wp_kses_post(get_the_excerpt($this->id)) : wp_kses_post( wp_trim_words( get_post_field('post_content', $this->id), $size ) );
	}
	public function getThumbUrl()
	{
        $selectedThumb = get_the_post_thumbnail_url($this->id);
		return $selectedThumb ? $selectedThumb : App::get('defaultThumbnail');
	}	
    public function getPermalink()
    {
        return get_permalink($this->id);
    }       
    public function getContent()
    {
        return wp_kses_post(get_post_field('post_content', esc_attr($this->id)));
    }
}
?>