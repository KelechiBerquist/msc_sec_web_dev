<?php


class HomeController{
	public static function get_home(){
		echo "Hello World! <br>";
		require __DIR__ . '/../content/home.php';

	}
}
