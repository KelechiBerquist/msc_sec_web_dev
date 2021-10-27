<?php include __DIR__ . '/templates/header.php'; ?>

<div>
	<?php
		if( isset( $_SESSION['post_movie_reg_msg'] ) ) {
			echo($_SESSION['post_movie_reg_msg']);
			unset($_SESSION['post_movie_reg_msg']);
		}


	?>

</div>
<div>
	<?php
		if( isset( $_SESSION['movie_reg_msg'] ) ) {
			echo($_SESSION['movie_reg_msg']);
			unset($_SESSION['movie_reg_msg']);
		}
	?>

</div>

<div>
	<?php
		if( isset( $_SESSION['repo_msg'] ) ) {
			echo($_SESSION['repo_msg']);
			unset($_SESSION['repo_msg']);
		}
	?>

</div>


<h1> Movie Registration </h1>


<form method="post" action="/movie/register">
	<div>
		<label for="movie_name"> Name of movie </label>
		<input type="text" name="movie_name" id="mov_name"/>
	</div>
		<label for="description"> Description </label>
		<input type="text" name="description" id="mov_description"/>
	<div>
		<label for="ticket_price"> Ticket price </label>
		<input type="text" name="ticket_price" id="mov_ticket_price"/>
	</div>
	<div>
		<label for="rating"> rating </label>
		<input type="text" name="rating" id="mov_rating"/>
	</div>
	<div>
		<input type="submit" value="Add New Movie!">
	</div>

</form>


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
