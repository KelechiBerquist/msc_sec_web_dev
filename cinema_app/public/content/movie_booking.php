<form>
	<label for="reservation_username"> Reservation username </label>
	<input name="reservation_username" id="reservation_username" />

	<label for="reservation_forename"> Reservation First Name </label>
	<input name="reservation_forename" id="reservation_forename" />

	<label for="reservation_lastname"> Reservation Last Name </label>
	<input name="reservation_lastname" id="reservation_lastname" />

	<label for="screening_date_time"> Screening Time </label>
	<input name="screening_date_time" id="screening_date_time" />

	<label for="num_attending"> Number of people in party </label>
	<input name="num_attending" id="num_attending" />

</form>

<div>
	The args are: <?php $_GET['args']; ?>
</div>

<!-- Information to book a movie -->
<!--
`movieID` mediumint(8) UNSIGNED NOT NULL,
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `screening_date_time` datetime NOT NULL,
  `num_attending` mediumint(2) NOT NULL -->
