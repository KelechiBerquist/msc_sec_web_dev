<?php


class Repository {
	/*
		Handles interactions with the database
	*/
	private $conn;
	private $failureMessage;
	private $successMessage;
	private $insert_movie_prep;
	private $insert_booking_prep;
	private $insert_customer_prep;
	private $find_user_by_username_prep;
	private $find_movie_by_name_prep;
	private $find_movie_by_id_prep;



	public function __construct(PDO $connection)
	{
		$this->conn = $connection;
		$this->failureMessage = [
			"flag" => False
			, "msg" => "Oh oh! Something went wrong. Please try again."
		];
		$this->successMessage = ["flag" => True, "msg"=> "Successful!"];

		$this->insert_movie_prep = $this->conn->prepare(
			"INSERT INTO movie_bookings VALUES " .
			"(:movieID, :customerID, :screening_date_time, :num_attending);"
		);

		$this->insert_booking_prep = $this->conn->prepare(
			"INSERT INTO movie_bookings VALUES " .
			"(:movieID, :customerID, :screening_date_time, :num_attending);"
		);

		$this->insert_customer_prep = $this->conn->prepare(
			"INSERT INTO customers VALUES (
				:customerID, :username, :password_hash, :customer_forename,
				:customer_surname, :customer_postcode, :customer_address1,
				:customer_address2, :date_of_birth
			);"
		);

		$this->find_movie_by_name_prep = $this->conn->prepare(
			"SELECT * FROM movies WHERE movie_name = ?;"
		);

		$this->find_movie_by_id_prep = $this->conn->prepare(
			"SELECT * FROM movies WHERE movieID = ? ;"
		);

		$this->find_user_by_username_prep = $this->conn->prepare(
			"SELECT * FROM customers WHERE username = ? ;"
		);

	}

	public function insert_new_movie(array $arr)
	{
		/**
		 * Inserts new record into `movies` table
		 */
		$returnValue = NULL;
		try {
			$this->insert_movie_prep->execute($arr);
			$returnValue = $this->successMessage;
			$returnValue["msg"] = "Movie insertion was " . $this->successMessage["msg"];
		} catch (Exception $e){
			$returnValue = $this->failureMessage;
			$returnValue["msg"] = $this->failureMessage["msg"] . '<br><br><br><br>' . $e;
		} finally {
			return $returnValue;
		}
	}

	public function insert_new_booking(array $arr)
	{
		/**
		 * Inserts new record into `movie_bookings` table
		 */
		$returnValue = NULL;
		try {
			$this->insert_booking_prep->execute($arr);
			$returnValue = $this->successMessage;
			$returnValue["msg"] = "Movie booking insertion was " . $this->successMessage["msg"];
		} catch (Exception $e){
			$returnValue = $this->failureMessage;
			$returnValue["msg"] = $this->failureMessage["msg"] . '<br><br><br><br>' . $e;
		} finally {
			return $returnValue;
		}
	}

	public function insert_new_customer(array $arr)
	{
		/**
		 * Inserts new record into `customers` table
		 */
		$returnValue = NULL;
		try {
			$arr["password_hash"] = password_hash($arr["password"], PASSWORD_BCRYPT);
			unset($arr["password"]);
			$this->insert_customer_prep->execute($arr);
			$returnValue = $this->successMessage;
			$returnValue["msg"] = "Account creation was " . $this->successMessage["msg"];
		} catch (Exception $e){
			$returnValue = $this->failureMessage;
			$returnValue["msg"] = $this->failureMessage["msg"] . '<br><br><br><br>' . $e;
		} finally {
			return $returnValue;
		}
	}

	public function find_movie_by_name(string $mname): array
	{
		/**
		 * Finds record of movie given its name
		 */
		$this->find_movie_by_name_prep->bindParam(1, $mname, PDO::PARAM_STR);
		$this->find_movie_by_name_prep->execute();
		$movie = (array) $this->find_movie_by_name_prep->fetchAll();
		return $movie;
	}

	public function find_movie_by_id(string $mid): array
	{
		/**
		 * Finds record of movie given its unique id
		 */
		$this->find_movie_by_id_prep->bindParam(1, $mid, PDO::PARAM_INT);
		$this->find_movie_by_id_prep->execute();
		$movie = (array) $this->find_movie_by_id_prep->fetchAll();

		return $movie;
	}
	public function find_customer_by_username(string $username){
		/**
		 * Finds record of customer in database given username
		 */
		$this->find_user_by_username_prep->bindParam(1, $username, PDO::PARAM_STR);
		$this->find_user_by_username_prep->execute();
		$customer = (array) $this->find_user_by_username_prep->fetchAll();
		return $customer[0];
	}


	public function verify_username_password(array $arr){
		/**
		 * Verifies that login password matches stored password_hash
		 */
		$user = $this->find_customer_by_username($arr["username"]);
		$password_match = password_verify($arr["password"], $user["password_hash"]);
		return $password_match;
	}



	public function select_all_movies(): array
	{
		/**
		 * Selects all movies
		 */
		return (array) $this->conn->query("SELECT * FROM movies;")->fetchAll();
	}


}

$db = require __DIR__ . '/db_settings.php';
$repo = new Repository($db);

return $repo;
