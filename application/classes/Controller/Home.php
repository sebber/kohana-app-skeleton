<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view = new View_Home_Index;
		$this->content = $this->renderer->render($view);
	}

}