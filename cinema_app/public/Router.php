<?php

include 'Controller.php';


class Router{

	private $request;

	public function __construct($request){
		$this->request = $request;
	}

	public function get_index($route, $file){

		echo "Initial route is ";
		echo $route;
		echo "<br/>";
		$uri = trim( $this->request, "/" );

		echo "Initial (after trimming) uri is ";
		echo $uri;
		echo "<br/>";
		$uri = explode("/", $uri);

		echo "After explosion, uri is ";
		print_r($uri);
		echo "<br/>";


		if($uri[0] == trim($route, "/")){
			echo "In if statement, uri is ";
			print_r($uri);
			echo "<br/>";

			echo "In if statement, trimmed route is ";
			print_r(trim($route, "/"));
			echo "<br/>";

			array_shift($uri);
			$args = $uri;

			echo "In if statement, after array shift, uri is ";
			print_r($uri);
			echo "<br/>";

			echo __DIR__ . '../' . $file . '.php' . "<br/>";


			require __DIR__ . '../' . $file . '.php';

		}

	}

	public function get($route, $file){

		echo "Initial route is ";
		echo $route;
		echo "<br/>";
		$uri = trim( $this->request, "/" );

		echo "Initial (after trimming) uri is ";
		echo $uri;
		echo "<br/>";
		$uri = explode("/", $uri);

		echo "After explosion, uri is ";
		print_r($uri);
		echo "<br/>";


		if($uri[0] == trim($route, "/")){
			echo "In if statement, uri is ";
			print_r($uri);
			echo "<br/>";

			echo "In if statement, trimmed route is ";
			print_r(trim($route, "/"));
			echo "<br/>";

			array_shift($uri);
			$args = $uri;

			echo "In if statement, after array shift, uri is ";
			print_r($uri);
			echo "<br/>";

			echo __DIR__ . '../' . $file . '.php' . "<br/>";


			require __DIR__ . '../' . $file . '.php';

		}

	}

	public function post($route, $file){

		echo "Initial route is ";
		echo $route;
		echo "<br/>";
		$uri = trim( $this->request, "/" );

		echo "Initial (after trimming) uri is ";
		echo $uri;
		echo "<br/>";
		$uri = explode("/", $uri);

		echo "After explosion, uri is ";
		print_r($uri);
		echo "<br/>";


		if($uri[0] == trim($route, "/")){
			echo "In if statement, uri is ";
			print_r($uri);
			echo "<br/>";

			echo "In if statement, trimmed route is ";
			print_r(trim($route, "/"));
			echo "<br/>";

			array_shift($uri);
			$args = $uri;

			echo "In if statement, after array shift, uri is ";
			print_r($uri);
			echo "<br/>";


			require $file . '.php';

		}

	}

}
