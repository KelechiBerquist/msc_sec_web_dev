<?php


class Repository {
	public function __construct(PDO $connection)
	{
		$this->connection = $connection;
		$this->failureMessage = [
			"success_flag" => False
			, "message" => "Oh oh! Something went wrong. Please try again."
		];
		$this->successMessage = ["success_flag" => True];
	}

	public function insert(array $arr)
	{
		$sql = "INSERT INTO :table SET ";

		$row = [];
		$row['table'] = $arr['table'];

		foreach($arr as $key => $val) {
			if ($key != 'table') {
				$row[$key] = $val;
				$sql = $sql . "  {$key}=:{$key}  ";
			}
		}
		$sql = $sql . ";";
		$this->connection->prepare($sql)->execute($row);
	}

	public function select(array $arr): array
	{
		$sql = "SELECT * FROM :table WHERE :where_clause; ";
		return (array)$this->connection->prepare($sql)->execute($arr)->fetchAll();
	}

	public function delete(array $arr)
	{
		$sql = "UPDATE :table SET deleted_at = CURRENT_TIMESTAMP() WHERE :where_clause; ";
		$this->connection->prepare($sql)->execute($arr);
	}

	public function test(): array
	{
		$sql = "select * from information_schema.tables;";
		$data = $this->connection->query($sql)->fetchAll();
		return (array)$data;
	}


}
