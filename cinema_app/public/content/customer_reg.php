<?php include __DIR__ . '/templates/header.php'; ?>


<div class="pad-1 text-sz-md text-wt-reg pg-header-banner text-align-center"> Create Account </div>

<form method="post" action="/customer/register">
	<div class='d-inline-tab pad-2 w-20 '>
		<label class='text-sz-brg' for="username"> Username </label>
		<input class='text-sz-brg' type="text" name="username" id="cust_username"/>
	</div>

	<div class='d-inline-tab pad-2 w-20 '>
		<label class='text-sz-brg' for="password"> Password </label>
		<input class='text-sz-brg' type="password" name="password" id="cust_password"/>
	</div>

	<div class='d-inline-tab pad-2 w-20 '>
		<label class='text-sz-brg' for="customer_forename"> First Name </label>
		<input class='text-sz-brg' type="text" name="customer_forename" id="cust_fore_name"/>
	</div>

	<div class='d-inline-tab pad-2 w-20 '>
		<label class='text-sz-brg' for="customer_surname"> Last Name </label>
		<input class='text-sz-brg' type="text" name="customer_surname" id="cust_surname"/>
	</div>

	<div class='d-inline-tab pad-2 w-20'>
		<label class='text-sz-brg' for="customer_postcode"> Postcode </label>
		<input class='text-sz-brg' type="text" name="customer_postcode" id="cust_postcode"/>
	</div>

	<div class='d-inline-tab pad-2 w-20'>
		<label class='text-sz-brg' for="customer_address1"> Address Line 1 </label>
		<input class='text-sz-brg' type="text" name="customer_address1" id="cust_address1"/>
	</div>

	<div class='d-inline-tab pad-2 w-20'>
		<label class='text-sz-brg' for="customer_address2"> Address Line 2 </label>
		<input class='text-sz-brg' type="text" name="customer_address2" id="cust_address2"/>
	</div>

	<div class='d-inline-tab pad-2 w-20'>
		<label class='text-sz-brg' for="date_of_birth"> Date of Birth </label>
		<input class='text-sz-brg' type="text" name="date_of_birth" id="cust_date_of_birth"/>
	</div>

	<div class='d-inline-tab pad-2'>
		<input class=' button text-sz-brg' type="submit" value="Create Account">
	</div>

</form>


<?php include __DIR__ . '/templates/footer.php'; ?>
