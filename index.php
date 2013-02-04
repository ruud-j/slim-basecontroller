<?php

// You should let Composer autoload all those files, but hey, it's just an example
require_once 'Slim/Slim.php';
require_once 'Controller/Base.php';
require_once 'Controller/Example.php';

$app = new Slim();

$app->get('/:name', function($name) use ($app) {
	// Call show() in Example Controller with $name as parameter
	Controller\Example::dispatch($app, 'show', $name);
});

$app->run();
