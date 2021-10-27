<?php


class HomeController{
	public static function get_home(){
		$_SESSION['get_home_msg'] = 'Hello World! <br> In get_home() <br> <br>';
		require __DIR__ . '/../content/home.php';
	}


	public static function post_home(){
		$_SESSION['post_home_msg'] = 'Hello World! <br> In post_home() <br> <br>';
		require __DIR__ . '/../content/home.php';
	}
}
