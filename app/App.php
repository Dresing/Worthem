<?php 

namespace Worthem;


class App
{

	private static $container = [];

	/**
	 * Injects a value to the application container.
	 */
	public static function bind($key, $value)
	{
		static::$container[$key] = $value;
	}

	public static function bindMany(Array $bindings)
	{
		foreach($bindings as $key => $value)
		{
			static::$container[$key] = $value;
		}		
	}

	/**
	 * Resolves a variable from the application container.
	 */
	public static function get($key)
	{
		if(!array_key_exists($key, static::$container)){
			throw new Exception('Tried to resolve unknown key from container.');
		}

		return static::$container[$key];
	}


	public static function getExcerpt($id)
	{
		return get_the_excerpt($id) ?  wp_kses_post(get_the_excerpt($id)) : wp_kses_post( wp_trim_words( get_post_field('post_content', $id), 20 ) );
	}
}
?>