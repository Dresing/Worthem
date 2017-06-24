<?php 

namespace Worthem\Enque;



class Style implements Enquable
{


	private $name;
	private $url;
	private $dependencies;
	private $version;
	private $media;

	public function __construct($name, $url, $dependencies = array(), $version = 1.0, $media = 'all')
	{
		$this->name = $name;
		$this->url = $url;
		$this->dependencies = $dependencies;
		$this->version = $version;
		$this->media = $media;
	}


	public function enque()
	{
		wp_enqueue_style( $this->name, $this->url, $this->dependencies, $this->version, $this->media);
	}
}