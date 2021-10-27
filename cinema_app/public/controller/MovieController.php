<?php


// $repo = require_once __DIR__ . '/../repository/Repository.php';

class MovieController{
	public static function get_movie_listing(array $uri){
		$this_uri = array_shift($uri);
		if ($this_uri == ''){
			MovieController::get_all_movies();
		} else {
			MovieController::get_specific_movie($uri);
		}
	}
	public static function post_movie_listing(array $uri){}



	public static function get_all_movies(){
		$_SESSION['get_movie_listing_msg'] = 'Hello World! <br> In get_movie_listing() <br> <br>';
		global $repo;
		$_SESSION['all_movies'] = $repo->select_all_movies();

		require __DIR__ . '/../content/movie_listings.php';

	}

	public static function get_specific_movie(array $uri){
		var_dump($uri);
		$movieId = $uri[0];
		$_SESSION['get_movie_booking_msg'] = 'Hello World! <br> In get_specific_movie() <br> <br>';
		global $repo;

		if (!(isset($_SESSION['movies_by_id']))){
			$_SESSION['movies_by_id'] = [];
		}

		if (! (array_key_exists($movieId, $_SESSION['movies_by_id']))){
			$arr = ["movieID" => $movieId];
			$this_movie = $repo->find_movies_by_id($arr);
			$_SESSION['movies_by_id'] = [$movieId => $this_movie];
		}

		require __DIR__ . '/../content/movie_details.php';

	}


	public static function get_movie_reg(){
		$_SESSION['get_movie_reg_msg'] = 'Hello World! <br> In get_movie_reg() <br> <br>';
		require __DIR__ . '/../content/movie_reg.php';

	}
	public static function post_movie_reg(){
		$arr = (array) $_POST;
		global $repo;

		$movieAdded = $repo->insert_new_movie($arr);
		$statusCode = 303;
		$_SESSION['post_movie_reg_msg'] = 'Hello World! <br> In post_movie_reg() <br> <br>';
		$_SESSION['post_movie_reg_msg'] = $_SESSION['post_movie_reg_msg'] . $movieAdded["msg"];
		header('Location: ' . '/movie/register', true, $statusCode);
		die();

	}


	public static function get_movie_booking(){
		$_SESSION['post_movie_booking_msg'] = 'Hello World! <br> In post_movie_booking() <br> <br>';
		// require __DIR__ . '/../content/home.php';

	}


	public static function post_movie_booking(){
		$_SESSION['post_movie_booking_msg'] = 'Hello World! <br> In post_movie_booking() <br> <br>';
		// require __DIR__ . '/../content/home.php';

	}



}
