<?php

namespace Worthem\Enque;
use Worthem\App;



class Loader
{


	private static $enques = [];


	public static function addEnquable(Enquable $enqueSubject)
	{
		static::$enques[] = $enqueSubject;
	}

	public static function enque(){

		foreach(static::$enques as $enquable)
		{
			$enquable->enque();
		}

	}
}



?>