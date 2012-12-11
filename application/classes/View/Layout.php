<?php defined('SYSPATH') or die('No direct script access.');

 /* extends Kostache_Layout */
class View_Layout {

	protected $_partials = array(
		'navbar'	=> 'partials/navbar',
		'header'	=> 'partials/header'
	);

	protected $_title = "Kohana Application-Skeleton";

	protected $_content = '';

	public function title()
	{
		return $this->_title;
	}

	public function navigation()
	{
		return array(
			array("Title" => "Home", "Path" => URL::site("/")),
			array("Title" => "About", "Path" =>  URL::site("/about")),
		);
	}

	public function content($content = NULL)
	{
		if(!empty($content))
			$this->_content = $content;

		return $this->_content;
	}

	public function stylesheets()
	{
		return new Asset_Group('stylesheets');
	}

	public function scripts()
	{
		return new Asset_Group('javascripts');
	}

}