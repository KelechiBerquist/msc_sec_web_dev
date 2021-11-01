<?php include __DIR__ . '/templates/header.php'; ?>

<h1> Movie Registration </h1>


<form method="post" action="/movie/register">
	<div>
		<label for="movie_name"> Name of movie </label>
		<input type="text" name="movie_name" id="mov_name"/>
	</div>
	<div>
		<label for="description"> Description </label>
		<input type="text" name="description" id="mov_description"/>
	</div>
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
