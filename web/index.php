<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

use Sitepoint\Factory\FeedFactory;

$app = new Silex\Application();
$app['debug'] = true;
$blogPosts = array();

// Create the view
$view = new \figdice\View();

// Register the feed factory
$view->registerFeedFactory(new FeedFactory()); 

// I18n
$view->setTranslationPath('../lang');
$view->setLanguage('es');


$app->get('/about', function () use ($view) {

	$view->loadFile( '../templates/about.html' );

	return $view->render();
});

$app->get('/blog', function() use ($view) {

	//$view->registerFeedFactory(new BlogFeedFactory()); 

	$view->loadFile( '../templates/blog.html' );

	return $view->render();

});

$app->get('/', function () use ($view) {

	$view->loadFile( '../templates/home.html' );

	return $view->render();
});

$app->run();
