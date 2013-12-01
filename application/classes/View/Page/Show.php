<?php defined('SYSPATH') or die('No direct script access.');

class View_Page_Show extends View {

  private $content = '';

  function __construct($page = NULL) 
  {
    $this->content = $page;
  }

  public function content($content = NULL)
  {
    if(!empty($content))
      $this->content = $content;

    return $this->content;
  }

}