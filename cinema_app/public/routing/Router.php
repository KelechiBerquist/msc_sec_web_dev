<?php

include __DIR__ . '/HomeController.php';
include __DIR__ . '/UserController.php';
include __DIR__ . '/MovieController.php';



class Router{
	public static function route(){
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'GET':
				Router::get();
				break;
			case 'POST':
				Router::post();
				break;
		}
	}

	public static function get(){
		switch ($_SERVER["REQUEST_URI"]) {
			case '/':
				HomeController::get_home();
				break;
			case '/register':
				UserController::get_user_reg();
				break;
			case '/login':
				UserController::get_login();
				break;
			case '/book':
				MovieController::get_movie_booking();
				break;
		}
	}

	public  static function post(){
		switch ($_SERVER["REQUEST_URI"]) {
			case '/':
				HomeController::post_home();
				break;
			case '/register':
				UserController::post_user_reg();
				break;
			case '/login':
				UserController::post_login();
				break;
			case '/book':
				MovieController::post_movie_booking();
				break;
		}
	}
}
