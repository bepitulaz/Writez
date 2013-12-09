<?php
require 'vendor/autoload.php';

// Instantiate the Slim Framework
$app = new \Slim\Slim(array(
	'debug' => true,
	'templates.path' => './templates'
	)
);

$app->setName('Writez Simple Blogging');

// Define the root route
$app->get('/', function() {
	echo "Let's Writez!";
});

// Define the route for dashboard
$app->get('/dashboard', function() use ($app) {
	$app->render('dashboard/dashboard.php');
});

// Run the application
$app->run();