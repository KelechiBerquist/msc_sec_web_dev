<?php



class MovieController{
	public static function get_movie_listing(array $uri){
		if (count($uri)==0){
			MovieController::list_all_movies();
		} else {
			MovieController::list_specific_movie($uri);
		}
	}
	public static function post_movie_listing(array $uri){}
	public static function list_all_movies(){
		global $repo;
		$_SESSION['all_movies'] = $repo->select_all_movies();

		require __DIR__ . '/../content/movie_listings.php';

	}
	public static function list_specific_movie(array $uri){
		$movieId = intval($uri[0], 10);
		global $repo;

		$_SESSION['listed_movie'] = $repo->find_movie_by_id($movieId)[0];

		require __DIR__ . '/../content/movie_details.php';

	}


	public static function get_movie_reg(){
		require __DIR__ . '/../content/movie_reg.php';

	}
	public static function post_movie_reg(){
		$arr = (array) $_POST;
		global $repo;

		$arr["movieID"] = NULL;
		$movieAdded = $repo->insert_new_movie($arr);
		$statusCode = 303;
		$_SESSION['movie_reg_msg'] = $movieAdded["msg"];
		header('Location: ' . '/movie/register', true, $statusCode);
		die();

	}


	public static function get_movie_booking($uri){
		global $repo;
		$movieId = intval($uri[0], 10);
		$_SESSION['booked_movie'] = $repo->find_movie_by_id($movieId)[0];

		require __DIR__ . '/../content/movie_booking.php';
	}


	public static function post_movie_booking($uri){
		$arr = (array) $_POST;
		global $repo;

		$customer = $repo->find_customer_by_username($arr["username"])[0];
		$arr["customerID"] = $customer["customerID"];
		$movie_id = $arr["movieID"];

		$bookingAdded = $repo->insert_new_booking($arr);

		if ($bookingAdded["flag"]){
			unset($_SESSION['booked_movie']);
		}

		$statusCode = 303;
		$_SESSION['movie_booking_msg'] = $bookingAdded["msg"];
		header('Location: ' . "/movie/listing/{$movie_id}", true, $statusCode);
		die();
	}



}
