<?php

include __DIR__ . '/../controller/CustomerController.php';


class CustomerRouter{
	public static function route($uri){
		switch ($_SERVER["REQUEST_METHOD"]) {
			case 'GET':
				CustomerRouter::get($uri);
				break;
			case 'POST':
				CustomerRouter::post($uri);
				break;
		}
	}

	public static function get($uri){
		switch (array_shift($uri)) {
			case '':
				CustomerController::get_user_reg($uri);
				break;
			case '/':
				CustomerController::get_user_reg($uri);
				break;
			case 'register':
				CustomerController::get_user_reg($uri);
				break;
			case 'login':
				CustomerController::get_login($uri);
				break;
		}
	}

	public static function post($uri){
		switch (array_shift($uri)) {
			case '':
				CustomerController::post_user_reg();
				break;
			case '/':
				CustomerController::post_user_reg();
				break;
			case 'register':
				CustomerController::post_user_reg();
				break;
			case 'login':
				CustomerController::post_login();
				break;
		}
	}
}
