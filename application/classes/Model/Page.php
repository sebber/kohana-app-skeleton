<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page {

  public static function findBySlug($slug) {
    $page = Kohana::find_file('data', "pages/$slug", 'html');
    $page = file_get_contents($page);
    return $page;
  }

}