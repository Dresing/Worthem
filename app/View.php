<?php
namespace Worthem;



class View
{

    private $viewPath;
    private $data = [];
    
    public function from($viewName)
    {
        $this->viewPath = App::get('viewsDir') . $viewName . App::get('viewExtention');
        return $this;
    }

    public function with(Array $data = []) 
    {
        $this->data = $data;
        return $this;
    }


    public function load()
    {
        extract($this->data);
        get_header();
        require_once $this->viewPath;
        get_footer();
        exit();
    }

}