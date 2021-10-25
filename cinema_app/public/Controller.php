<?php


class Controller{

	public function get_index(){

		return "Hello World!";

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
