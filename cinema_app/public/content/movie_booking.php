<?php include __DIR__ . '/templates/header.php'; ?>

<div>
	<?php
		if( isset( $_SESSION['movie_booking_msg'] ) ) {
			echo($_SESSION['movie_booking_msg']);
			unset($_SESSION['movie_booking_msg']);
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


<div class="pad1 text-sz-md text-wt-reg">
	Booking Information: <?php echo $_SESSION['booked_movie']["movie_name"];?>
</div>

<form method="post" action="/movie/booking">
	<div>
		<input name="movieID" type="hidden"
		<?php
			$movie_id = $_SESSION['booked_movie']["movieID"];
			$value="value={$movie_id}";
			echo $value;
		?>

		/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="username"> Username </label>
		<input name="username" id="reservation_username" />
	</div>
	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="forename"> First Name </label>
		<input name="forename" id="reservation_forename" />
	</div>
	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="lastname"> Last Name </label>
		<input name="lastname" id="reservation_lastname" />
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="screening_date_time"> Screening Time </label>
		<input name="screening_date_time" id="screening_date_time" />
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="num_attending"> Number of people in party </label>
		<input name="num_attending" id="num_attending" />
	</div>

	<div>
		<input type="submit" value="Book Now!">
	</div>

</form>


<?php include __DIR__ . '/templates/footer.php'; print_r($_GET) ?>

<!-- Information to book a movie -->
<!--
`movieID` mediumint(8) UNSIGNED NOT NULL,
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `screening_date_time` datetime NOT NULL,
  `num_attending` mediumint(2) NOT NULL -->
