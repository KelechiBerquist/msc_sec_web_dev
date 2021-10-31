<?php include __DIR__ . '/templates/header.php'; ?>

<div>
	<?php
		if( isset( $_SESSION['movie_booking_msg'] ) ) {
			echo($_SESSION['movie_booking_msg']);
			unset($_SESSION['movie_booking_msg']);
		}
	?>

</div>

<div class="pad-1 text-sz-md text-wt-reg pg-header-banner text-align-center">
	Booking Information: <?php echo $_SESSION['booked_movie']["movie_name"];?>
</div>

<form method="post" action="/movie/booking">
	<div class='pad-2 w-20 text-sz-brg'>
		<input name="movieID" type="hidden"
		<?php
			$movie_id = $_SESSION['booked_movie']["movieID"];
			$value="value={$movie_id}";
			echo $value;
		?>
		/>
	</div>

	<div class='d-inline-tab pad-2 w-30 text-sz-brg'>
		<label class='text-sz-brg' for="username"> Username: </label>
		<input class='text-sz-brg' name="username" id="reservation_username" />
	</div>

	<div class='d-inline-tab pad-2 w-30 text-sz-brg'>
		<label class='text-sz-brg' for="forename"> First Name: </label>
		<input class='text-sz-brg' name="forename" id="reservation_forename" />
	</div>
	<div class='d-inline-tab pad-2 w-30 text-sz-brg'>
		<label class='text-sz-brg' for="lastname"> Last Name: </label>
		<input class='text-sz-brg' name="lastname" id="reservation_lastname" />
	</div>

	<div class='d-inline-tab pad-2 w-30 text-sz-brg'>
		<label class='text-sz-brg' for="screening_date_time"> Screening Time: </label>
		<input class='text-sz-brg' name="screening_date_time" id="screening_date_time" />
	</div>

	<div class='d-inline-tab pad-2 w-30'>
		<label class='text-sz-brg' for="num_attending"> Party Size: </label>
		<input class='text-sz-brg' name="num_attending" id="num_attending" />
	</div>

	<div class='pad-2 text-align-left'>
		<input type="submit" class='text-sz-brg text-wt-reg button pad-1' value="Book Now!">
	</div>

</form>


<?php include __DIR__ . '/templates/footer.php'; ?>

<!-- Information to book a movie -->
<!--
`movieID` mediumint(8) UNSIGNED NOT NULL,
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `screening_date_time` datetime NOT NULL,
  `num_attending` mediumint(2) NOT NULL -->
