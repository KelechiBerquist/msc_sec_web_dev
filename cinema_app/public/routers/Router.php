<?php

include __DIR__ . '/HomeRouter.php';
include __DIR__ . '/UserRouter.php';
include __DIR__ . '/MovieRouter.php';



class Router{
	public static function route(){
		/*
			Trim leading and trailing whitespace to get routes
		 */
		$uri = trim($_SERVER["REQUEST_URI"], "/");
		/*
			Explode routes to get sub routes
		 */
		$uri_args = explode("/", $uri);
		echo "uri_args <br>";
		var_dump($uri_args);
		echo "<br><br><br>";

		/*
			array_shift removes the first element from the array and
			returns the element that was removed.
		 */
		switch (array_shift($uri_args)) {
			case '':
				HomeRouter::route($uri_args);
				break;
			case 'user':
				UserRouter::route($uri_args);
				break;
			case 'movie':
				MovieRouter::route($uri_args);
				break;
		}
	}
}
