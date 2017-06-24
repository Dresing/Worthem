<?php 
namespace Worthem;
use Worthem\App;

/**
* 
*/
class ACF
{
	private static $relativePath = '/acf';


	public static function load(){
		include_once( App::get('themeDir') . static::$relativePath . '/acf.php' );
		add_filter('acf/settings/path',  array( ACF::class, 'my_acf_settings_path'));
		add_filter('acf/settings/dir', array( ACF::class,'my_acf_settings_dir'));		
	}

	public static function my_acf_settings_path( $path ) {
		 
		    // update path
		    $path = App::get('themeDir') . static::$relativePath . '/';
		    
		    // return
		    return $path;
		    
	}
	public static function my_acf_settings_dir( $dir ) {
	 
		    // update path
		    $dir = App::get('themeUrl') . static::$relativePath . '/';
		    
		    // return
		    return $dir;
	    
	}	


}

