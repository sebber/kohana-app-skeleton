<?php defined('SYSPATH') or die('No direct script access.');

class Controller extends Kohana_Controller {

	protected $renderer;
		
	protected $content = '';

	public function before()
	{
		parent::before();
		
		$this->renderer = Kostache::factory();
	}

	public function after()
	{
		$layout = new View_Layout;
		$layout->content($this->content);

		$this->response->body($this->renderer->render($layout));

		parent::after();
	}

}