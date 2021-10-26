<?php

include __DIR__ . '/routing/Router.php';


$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);


/*
	This maps routes to controller functions that will perform
		necessary actions and send the necessary files.
	The functions are sent as string and a standard function
		is used to call the class method.
	The class referenced in the route mapping needs to be defined in
		index file.
*/
$router->get('/', 'HomeController::get_home');
$router->get('/register', 'UserController::get_user_reg');
$router->get('/login', 'UserController::get_login');
$router->get('/book', 'MovieController::get_movie_booking');
