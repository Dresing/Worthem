<?php
use Worthem\App;
use Worthem\ACF;
use Worthem\Enque\Loader;
use Worthem\Enque\Script;
use Worthem\Enque\Style;


//Bind Constants
App::bindMany([
    'themeUrl'      => esc_url(get_stylesheet_directory_uri()),
    'themeDir'      => get_stylesheet_directory(),
    'stylesheetUrl' => esc_url(get_stylesheet_directory_uri() . 'assets/app.css'),
    'scriptUrl'     => esc_url(get_stylesheet_directory_uri(). 'assets/app.js'),
    'name'	        =>	esc_attr(get_bloginfo('name')),
    'viewsDir'      => get_stylesheet_directory() . '/views/',
    'componentsDir' => get_stylesheet_directory() . '/components/',
    'viewExtention' => '.php',
]);

//Constant that has to be bound later when wp is loaded
add_action( 'wp', function(){
    App::bind('isFrontPage', is_front_page());
    App::bind('title', esc_attr(get_the_title()));
    App::bind('id', esc_attr(get_the_ID()));
    App::bind('content', get_post_field('post_content', esc_attr(get_the_ID())));
   
});

//Define ACF dependency
ACF::load();

//ACF bindings

App::bindMany([
    'logoUrl'           => esc_url(get_field('logo_url', 'options')),
    'address'           => esc_attr(get_field('address', 'options')),
    'postalCode'        => esc_attr(get_field('post_code', 'options')),
    'city'              => esc_attr(get_field('city', 'options')),
    'phone'             => esc_attr(get_field('phone', 'options')),
    'email'             => esc_attr(get_field('email', 'options')),
    'defaultThumbnail'  => esc_attr(get_field('default_thumbnail', 'options')),
    'flexible'          => 'flexible',
]); 

//Load Scripts and Styles
Loader::addEnquable(new Style('style', App::get('stylesheetUrl')));
Loader::addEnquable(new Script('script', App::get('scriptUrl')));
add_action( 'wp_enqueue_scripts', array(Loader::class, 'enque'));