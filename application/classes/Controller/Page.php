<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller {

  public function action_show()
  {
    $slug = $this->request->param('slug');
    $page = Model_Page::findBySlug($slug);

    if($page) {
      $view = new View_Page_Show($page);
      $this->content = $this->renderer->render($view);
    }
  }

}