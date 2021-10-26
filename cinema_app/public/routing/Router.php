<?php

include __DIR__ . '/HomeController.php';
include __DIR__ . '/UserController.php';
include __DIR__ . '/MovieController.php';



class Router{

	private $request;

	public function __construct($request){
		$this->request = $request;
	}

	public function get($route, $funcName){

		$uri = trim( $this->request, "/" );
		$uri = explode("/", $uri);


		if($uri[0] == trim($route, "/")){
			/*
				class and method name are passed as a string.
				The funtion below executes the class method
			 */
			call_user_func($funcName);
		}

	}

	public function post($route, $file){

		$uri = trim( $this->request, "/" );
		$uri = explode("/", $uri);


		if($uri[0] == trim($route, "/")){
			array_shift($uri);
			require __DIR__ . '/../' . $file . '.php';

		}
	}

}
