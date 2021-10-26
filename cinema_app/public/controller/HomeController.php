<?php


class HomeController{
	public static function get_home(){
		echo "Hello World! <br> In get_home() <br>";
		require __DIR__ . '/../content/home.php';
	}


	public static function post_home(){
		echo "Hello World! <br> In post_home() <br>";
		require __DIR__ . '/../content/home.php';
	}
}
