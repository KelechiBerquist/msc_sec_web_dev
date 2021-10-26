<?php
	include __DIR__ . "/templates/header.php";
	$db = require __DIR__ . '/../repository/db_settings.php';
	$sql = "SELECT * FROM movies";
	$data = (array)$db->query($sql)->fetchAll();
	var_dump($data);
	echo "<br><br><br><br>";

	echo __DIR__ . "/templates/footer.php <br>";
?>

<h1> Cinema Application </h1>

<a href="/user/register"> Register as a user </a>
<a href="/movie/register"> Register as a user </a>







<?php
	include __DIR__ . "/templates/footer.php";
	echo __DIR__ . "/templates/footer.php <br>";
?>
