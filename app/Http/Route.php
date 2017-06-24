<?php

namespace Worthem\Http;
use Worthem\View;
class Route
{

	public static function get($expression, $controllerFunction)
	{
		if(!$expression)
		{
			return false;
		}

		//Get the view instance
		$viewInstance = $controllerFunction();

		if(is_object($viewInstance));
		{
			exit();
		}
	}

}


