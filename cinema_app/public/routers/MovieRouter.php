<?php

include __DIR__ . '/../controller/MovieController.php';



class MovieRouter{
	public static function route($uri){
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'GET':
				MovieRouter::get($uri);
				break;
			case 'POST':
				MovieRouter::post($uri);
				break;
		}
	}


	public static function get($uri){
		switch (array_shift($uri)) {
			case '':
				MovieController::get_movie_listing();
				break;
			case '/':
				MovieController::get_movie_listing();
				break;
			case 'listing':
				MovieController::get_movie_listing();
				break;
			case 'booking':
				MovieController::get_movie_booking();
				break;
			case 'register':
				MovieController::get_movie_reg();
				break;
		}
	}

	public  static function post($uri){
		switch (array_shift($uri)) {
			case '':
				MovieController::post_movie_listing();
				break;
			case '/':
				MovieController::post_movie_listing();
				break;
			case 'listing':
				MovieController::post_movie_listing();
				break;
			case 'booking':
				MovieController::post_movie_booking();
				break;
			case 'register':
				MovieController::post_movie_reg();
				break;
		}
	}

	// public static function get(){
	// 	switch ($_SERVER["REQUEST_URI"]) {
	// 		case '/':
	// 			HomeController::get_home();
	// 			break;
	// 		case '/register':
	// 			UserController::get_user_reg();
	// 			break;
	// 		case '/login':
	// 			UserController::get_login();
	// 			break;
	// 		case '/book':
	// 			MovieController::get_movie_booking();
	// 			break;
	// 	}
	// }

	// public  static function post(){
	// 	switch ($_SERVER["REQUEST_URI"]) {
	// 		case '/':
	// 			HomeController::post_home();
	// 			break;
	// 		case '/register':
	// 			UserController::post_user_reg();
	// 			break;
	// 		case '/login':
	// 			UserController::post_login();
	// 			break;
	// 		case '/book':
	// 			MovieController::post_movie_booking();
	// 			break;
	// 	}
	// }


}
