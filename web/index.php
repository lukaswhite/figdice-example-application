<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

use Sitepoint\Factory\FeedFactory;

$app = new Silex\Application();

// Register the session service provider, which we'll use for storing the "current" language
$app->register(new Silex\Provider\SessionServiceProvider());

$app['debug'] = true;
$blogPosts = array();

// Create the view
$view = new \figdice\View();

// Register the feed factory
$view->registerFeedFactory(new FeedFactory()); 

// I18n
$view->setTranslationPath('../lang');

// Get the language from the session, if it's set - otherwise, default to English.
$language = $app['session']->get('lang', 'en');

// ...and set it on the view.
$view->setLanguage($language);

// This route is used to switch language
$app->get('/lang/{lang}', function ($lang) use ($app) {

	$app['session']->set('lang', $lang);

	return $app->redirect('/');

});

// The About page
$app->get('/about', function () use ($view) {

	$view->loadFile( '../templates/about.html' );

	return $view->render();
});

// The blog
$app->get('/blog', function() use ($view) {

	$view->loadFile( '../templates/blog.html' );

	return $view->render();

});

// Individual blog posts.
$app->get('/blog/post/{slug}', function($slug) use ($view) {

	$view->loadFile( '../templates/post.html' );

	// We use mount to "inject" the slug into the view, which it can then use to "pull" the appropriate post.
	$view->mount('slug', $slug);

	return $view->render();

});

// ... and finally, the homepage
$app->get('/', function () use ($view) {

	$view->loadFile( '../templates/home.html' );

	return $view->render();
});

$app->run();
