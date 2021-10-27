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
				MovieController::get_movie_listing($uri);
				break;
			case '/':
				MovieController::get_movie_listing($uri);
				break;
			case 'listing':
				MovieController::get_movie_listing($uri);
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
				MovieController::post_movie_listing($uri);
				break;
			case '/':
				MovieController::post_movie_listing($uri);
				break;
			case 'listing':
				MovieController::post_movie_listing($uri);
				break;
			case 'booking':
				MovieController::post_movie_booking($uri);
				break;
			case 'register':
				MovieController::post_movie_reg();
				break;
		}
	}
}
