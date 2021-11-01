<?php

include __DIR__ . '/HomeRouter.php';
include __DIR__ . '/CustomerRouter.php';
include __DIR__ . '/MovieRouter.php';



class Router{
	/**
	 * Performs first pass routing and re-routes request to other sub routers
	 * depending on the requested sbub-route.
	 */
	public static function route(){
		/*
			Trim leading and trailing whitespace to get routes
		 */
		$uri = trim($_SERVER["REQUEST_URI"], "/");
		/*
			Explode routes to get sub routes
		 */
		$uri_args = explode("/", $uri);
		/*
			array_shift removes the first element from the array and
			returns the element that was removed.
		 */
		switch (array_shift($uri_args)) {
			case '':
				HomeRouter::route($uri_args);
				break;
			case 'customer':
				CustomerRouter::route($uri_args);
				break;
			case 'movie':
				MovieRouter::route($uri_args);
				break;
		}
	}
}
