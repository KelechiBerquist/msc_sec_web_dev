<?php



class MovieController{
	/*
		Controllers for the actions on `/movie`
	*/
	public static function get_movie_listing(array $uri){
		/*
			Controls the retrieval of movie to the front end html/php
			for all movies and specific movies.
		*/
		if (count($uri)==0){
			MovieController::list_all_movies();
		} else {
			MovieController::list_specific_movie($uri);
		}
	}
	public static function post_movie_listing(array $uri){}
	public static function list_all_movies(){
		/*
			Controls the retrieval of movie to the front end html/php for all movies.
		*/
		global $repo;
		$_SESSION['all_movies'] = $repo->select_all_movies();

		require __DIR__ . '/../content/movie_listings.php';

	}
	public static function list_specific_movie(array $uri){
		/*
			Controls the retrieval of movie to the front end html/php
			for specific movies.
		*/
		$movieId = intval($uri[0], 10);
		global $repo;

		$_SESSION['listed_movie'] = $repo->find_movie_by_id($movieId)[0];

		require __DIR__ . '/../content/movie_details.php';

	}


	public static function get_movie_reg(){
		/*
			Controls the actions following get requests on `/movie/register`
		*/
		if (array_key_exists("auth_user", $_SESSION)){
			require __DIR__ . '/../content/movie_reg.php';
		} else {
			$_SESSION['view_msg'] = "Unable to access movie registration. <br>
			Please login or register to access this page";
			$statusCode = 303;
			header('Location: ' . '/customer/login', true, $statusCode);
			die();
		}
	}
	public static function post_movie_reg(){
		/*
			Controls the actions following post requests on `/movie/register`
		*/
		if (array_key_exists("auth_user", $_SESSION)){
			$arr = (array) $_POST;
			global $repo;

			$arr["movieID"] = NULL;
			$movieAdded = $repo->insert_new_movie($arr);
			$statusCode = 303;
			$_SESSION['view_msg'] = $movieAdded["msg"];
			header('Location: ' . '/movie/register', true, $statusCode);
			die();
		} else {
			$_SESSION['view_msg'] = "Unable to access movie registration. <br>
			Please login or register to access this page";
			$statusCode = 303;
			header('Location: ' . '/customer/login', true, $statusCode);
			die();
		}

	}


	public static function get_movie_booking(array $uri){
		/*
			Controls the actions following get requests on `/movie/booking`
		*/
		global $repo;

		if (count($uri) == 0){
			$statusCode = 303;
			header('Location: ' . '/movie/listing', true, $statusCode);
			die();
		} else if (array_key_exists("auth_user", $_SESSION)){
			$movieId = intval($uri[0], 10);
			$_SESSION['booked_movie'] = $repo->find_movie_by_id($movieId)[0];

			require __DIR__ . '/../content/movie_booking.php';
		} else {
			$_SESSION['view_msg'] = "Unable to access movie booking. <br>
			Please login or register to access this page";
			$statusCode = 303;
			header('Location: ' . '/customer/login', true, $statusCode);
			die();
		}
	}
	public static function post_movie_booking(){
		/*
			Controls the actions following post requests on `/movie/booking`
		*/
		$arr = (array) $_POST;
		global $repo;

		if (array_key_exists("auth_user", $_SESSION)){
			$db_arrobj = new ArrayObject($arr);
			$db_arr = $db_arrobj->getArrayCopy();


			$customer = $repo->find_customer_by_username($db_arr["username"]);
			$db_arr["customerID"] = $customer["customerID"];
			$movie_id = $db_arr["movieID"];
			unset($db_arr['username']);

			$booking_added = $repo->insert_new_booking($db_arr);

			if ($booking_added["flag"]){
				unset($_SESSION['booked_movie']);
			}

			$statusCode = 303;
			$_SESSION['view_msg'] = $booking_added["msg"];
			header('Location: ' . "/movie/listing/{$movie_id}", true, $statusCode);
			die();

			require __DIR__ . '/../content/movie_booking.php';
		} else {
			$_SESSION['view_msg'] = "Unable to access movie booking. <br>
				Please login or register to access this page";
			$statusCode = 303;
			header('Location: ' . '/customer/login', true, $statusCode);
			die();
		}
	}
}
