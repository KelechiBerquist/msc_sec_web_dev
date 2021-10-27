<?php include __DIR__ . '/templates/header.php'; ?>


<?php
	// echo 'Movies currently in db are: <br>';
	// var_dump($_SESSION['movies']);
	// echo '<br><br><br>'
?>

<table>
    <thead>
		<caption>Alien football stars</caption>
        <tr>
            <th colspan="4">Movies currently Available for booking</th>
        </tr>
    </thead>
    <tbody>
		<tr>
            <th>movie name</th>
            <th>description</th>
            <th>ticket price</th>
            <th>rating</th>
        </tr>

		<?php
		$len = count($_SESSION['movies']);
		$table = '';
		foreach ($_SESSION['movies'] as $row) {
			$movie_id = $row['movieID'];
			$movie_name = $row['movie_name'];
			$description = substr($row['description'], 0, 20) . '...';
			$ticket_price = $row['ticket_price'];
			$rating = $row['rating'];
			$table = $table . "<tr> <td><a href='/movie/listing/{$movie_id}'>{$movie_name}</a></td><td>{$description}</td><td>{$ticket_price}</td><td>{$rating}</td></tr>";
		}
		echo $table;

		?>
    </tbody>
</table>


<?php include __DIR__ . '/templates/footer.php'; ?>
<!--
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `movieID` mediumint(8) UNSIGNED NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ticket_price` decimal(7,2) NOT NULL,
  `rating` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-->
