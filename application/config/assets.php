<?php defined('SYSPATH') or die('No direct script access.');

return [

  'groups' => [
    'stylesheets' => [
      ['CSS', 'public/css/bootstrap.min.css'],
      ['CSS', 'public/css/bootstrap-responsive.min.css'],
      ['CSS', 'public/css/main.css'],
      /*array('CSS', 'css/print.css', array(
        'media' => 'print',
      )),
      array('CSS', 'css/test.less'),*/
    ],
    'javascripts' => [
      ['JS', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'],
      ['JS', 'public/js/bootstrap.min.js'],
      ['JS', 'public/js/main.js'],
    ],
  ],
  
];