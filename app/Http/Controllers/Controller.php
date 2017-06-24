<?php

namespace Worthem\Http\Controllers;


use Worthem\View;

class Controller
{


    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
    protected function notFound()
    {
	    global $wp_query;
	    $wp_query->set_404();
	    status_header(404);    	
    }
}