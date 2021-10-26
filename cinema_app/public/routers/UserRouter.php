<?php

include __DIR__ . '/../controller/UserController.php';


class UserRouter{
	public static function route($uri){
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'GET':
				UserRouter::get($uri);
				break;
			case 'POST':
				UserRouter::post($uri);
				break;
		}
	}

	public static function get($uri){
		switch (array_shift($uri)) {
			case '':
				UserController::get_user_reg();
				break;
			case '/':
				UserController::get_user_reg();
				break;
			case 'register':
				UserController::get_user_reg();
				break;
			case 'login':
				UserController::get_login();
				break;
		}
	}

	public  static function post($uri){
		switch (array_shift($uri)) {
			case '':
				UserController::post_user_reg();
				break;
			case '/':
				UserController::post_user_reg();
				break;
			case 'register':
				UserController::post_user_reg();
				break;
			case 'login':
				UserController::post_login();
				break;
		}
	}
}
