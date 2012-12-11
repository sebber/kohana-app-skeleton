<?php defined('SYSPATH') or die('No direct script access.');

return array(

	'groups' => array(
	 	'stylesheets' => array(
	 		array('CSS', 'public/css/bootstrap.min.css'),
	 		array('CSS', 'public/css/bootstrap-responsive.min.css'),
	 		array('CSS', 'public/css/main.css'),
	 		/*array('CSS', 'css/print.css', array(
	 			'media' => 'print',
	 		)),
	 		array('CSS', 'css/test.less'),*/
	 	),
	 	'javascripts' => array(
	 		array('JS', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'),
	 		array('JS', 'public/js/bootstrap.min.js'),
	 		array('JS', 'public/js/main.js'),
	 	),
	),
	
);