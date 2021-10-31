<?php include __DIR__ . '/templates/header.php'; ?>

<div>
	<?php
		if( isset( $_SESSION['user_reg_msg'] ) ) {
			echo($_SESSION['user_reg_msg']);
			unset($_SESSION['user_reg_msg']);
		}
	?>

</div>

<div class="pad-1 text-sz-md text-wt-reg"> Create Account </div>

<form method="post" action="/customer/register">
	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="username"> Username </label>
		<input type="text" name="username" id="cust_username"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="password"> Password </label>
		<input type="password" name="password" id="cust_password"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="customer_forename"> First Name </label>
		<input type="text" name="customer_forename" id="cust_fore_name"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="customer_surname"> Last Name </label>
		<input type="text" name="customer_surname" id="cust_surname"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="customer_postcode"> Postcode </label>
		<input type="text" name="customer_postcode" id="cust_postcode"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="customer_address1"> Address Line 1 </label>
		<input type="text" name="customer_address1" id="cust_address1"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="customer_address2"> Address Line 2 </label>
		<input type="text" name="customer_address2" id="cust_address2"/>
	</div>

	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="date_of_birth"> Date of Birth </label>
		<input type="text" name="date_of_birth" id="cust_date_of_birth"/>
	</div>

	<div class='pad-tb-2'>
		<input class='text-sz-rg' type="submit" value="Create account">
	</div>

</form>


<?php include __DIR__ . '/templates/footer.php'; ?>


<!--
`customerID` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` char(255) NOT NULL,
  `customer_forename` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_postcode` varchar(255) NOT NULL,
  `customer_address1` varchar(255) NOT NULL,
  `customer_address2` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime NOT NULL
-->
