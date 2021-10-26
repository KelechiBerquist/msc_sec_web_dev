<?php include __DIR__ . '/../templates/header.php'; ?>

<h1> Movie Registration </h1>
<form method="post" action="/movie_register">
	<label for="movie_name"> Name of movie </label>
	<input type="text" name="movie_name" id="mov_name"/>

	<label for="description"> Description </label>
	<input type="text" name="description" id="mov_description"/>

	<label for="ticket_price"> Ticket price </label>
	<input type="text" name="ticket_price" id="mov_ticket_price"/>

	<label for="rating"> rating </label>
	<input type="text" name="rating" id="mov_rating"/>
</form>


<?php include __DIR__ . './../templates/footer.php'; ?>
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
