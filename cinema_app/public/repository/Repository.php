<?php


class Repository {
	private $conn;
	private $insert_new_movie;
	private $insert_movie_prep;
	private $find_movie_by_name_prep;





	public function __construct(PDO $connection)
	{
		$this->conn = $connection;
		$this->failureMessage = [
			"flag" => False
			, "msg" => "Oh oh! Something went wrong. Please try again."
		];
		$this->successMessage = ["flag" => True, "msg"=> "Successful!"];

		$this->insert_movie_prep = $this->conn->prepare(
			"INSERT INTO movies VALUES " .
			"(:movieID, :movie_name, :description, :ticket_price, :rating);"
		);

		$this->find_movie_by_name_prep = $this->conn->prepare(
			"SELECT * FROM movies WHERE movie_name LIKE '%:movie_name%';"
		);

		$this->find_movie_by_id_prep = $this->conn->prepare(
			"SELECT * FROM movies WHERE movieID = :movie_name;"
		);

	}

	public function findMaxMovieId()
	{
		$maxMovieId = (array) $this->conn->query(
			"SELECT MAX(movieID) AS maxMovieId FROM movies;"
		)->fetchAll();

		$lastMovieId = 0;
		if (is_null($maxMovieId[0]["maxMovieId"])){
			$lastMovieId = 0;
		} else {
			$lastMovieId = intval($maxMovieId[0]["maxMovieId"], 10);
		}
		// echo 'Last movie id is ' . $lastMovieId . '<br><br>';
		// echo 'Value returned from db is: <br>';
		// var_dump($maxMovieId);
		// echo '<br><br>';
		return $lastMovieId;
	}

	public function insert_new_movie(array $arr)
	{
		$returnValue = NULL;
		try {
			$arr["movieID"] = NULL;
			$this->insert_movie_prep->execute($arr);
			$returnValue = $this->successMessage;
			$returnValue["msg"] = "Movie insertion was " . $this->successMessage["msg"];
		} catch (Exception $e){
			$returnValue = $this->failureMessage;
		} finally {
			return $returnValue;
		}
	}

	public function find_movies_by_name(array $arr): array
	{
		return (array) $this->select_movie_by_name_prep->execute($arr)->fetchAll();
	}

	public function find_movies_by_id(array $arr): array
	{
		return (array) $this->select_movie_by_id_prep->execute($arr)->fetchAll();
	}

	public function select_all_movies(): array
	{
		return (array) $this->conn->query("SELECT * FROM movies;")->fetchAll();
	}

}

$db = require __DIR__ . '/db_settings.php';
$repo = new Repository($db);

return $repo;
