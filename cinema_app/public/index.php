<?php

include 'Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'content/index');
$router->get('/register', 'content/user_registration');
$router->get('/login', 'content/login');
$router->get('/book', 'content/movie_booking');
