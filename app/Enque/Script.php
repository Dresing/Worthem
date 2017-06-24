<?php 

namespace Worthem\Enque;


class Script implements Enquable
{
	
	private $name;
	private $url;
	private $dependencies;
	private $version;
	private $inFooter;

	public function __construct($name, $url, $dependencies = array(), $version = 1.0, $inFooter = true)
	{
		$this->name = $name;
		$this->url = $url;
		$this->dependencies = $dependencies;
		$this->version = $version;
		$this->inFooter = $inFooter;
	}

	public function enque()
	{
		wp_enqueue_script( $this->name, $this->url, $this->dependencies, $this->version, $this->inFooter);
	}


}