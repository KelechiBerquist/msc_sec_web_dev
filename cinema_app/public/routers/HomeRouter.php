<?php

include __DIR__ . '/../controller/HomeController.php';



class HomeRouter{
	public static function route($uri){
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'GET':
				HomeRouter::get($uri);
				break;
			case 'POST':
				HomeRouter::post($uri);
				break;
		}
	}


	public static function get($uri){
		switch (array_shift($uri)) {
			case '':
				HomeController::get_home();
				break;
			case '/':
				HomeController::get_home();
				break;
		}
	}

	public  static function post($uri){
		switch (array_shift($uri)) {
			case '/':
				HomeController::post_home();
				break;
			case '':
				HomeController::post_home();
				break;
		}
	}
}
