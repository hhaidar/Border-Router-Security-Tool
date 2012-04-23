<?php

include 'lib/functions.php';
include 'lib/klein.php';
include 'lib/tempura.php';

// All Requests
respond(function($request, $response, $app) {
	// Let's make some Tempura
	$app->tpl = new Tempura(array(
		'path' => './views',
		'extension' => '.html'
	));
	$app->tpl->set(array(
		'site_name' => '',
		'media_url' => '/media',
		'css' => array(
			'style.css'
		),
		'javascript' => array(
			'jquery.js',
			'bootstrap.js',
			'carousel.js',
			'common.js'
		)
	));
});

// Home
respond('/', function($request, $response, $app) {
	$app->tpl->render('home');
});

// Ajax Namespace
with('/ajax', function () {

});

// 404 - Not found
respond('404', function ($request, $response) {
	$response->code('404');
});

// Klein out!
dispatch();