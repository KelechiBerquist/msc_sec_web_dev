<?php include __DIR__ . '/../templates/header.php'; ?>

<h1> Registration </h1>
<form method="post">
	<label for="customer_username"> Username </label>
	<input type="text" name="customer_username" id="cust_username"/>

	<label for="customer_password"> Password </label>
	<input type="text" name="customer_password" id="cust_password"/>

	<label for="customer_fore_name"> First Name </label>
	<input type="text" name="customer_fore_name" id="cust_fore_name"/>

	<label for="customer_surname"> Last Name </label>
	<input type="text" name="customer_surname" id="cust_surname"/>

	<label for="customer_postcode"> Postcode </label>
	<input type="text" name="customer_postcode" id="cust_postcode"/>

	<label for="customer_address1"> Address Line 1 </label>
	<input type="text" name="customer_address1" id="cust_address1"/>

	<label for="customer_address2"> Address Line 2 </label>
	<input type="text" name="customer_address2" id="cust_address2"/>

	<label for="customer_date_of_birth"> Date of Birth </label>
	<input type="text" name="customer_date_of_birth" id="cust_date_of_birth"/>
</form>


<?php include __DIR__ . './../templates/footer.php'; ?>
<!--
`customerID` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` char(255) NOT NULL,
  `customer_forename` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_postcode` varchar(255) NOT NULL,
  `customer_address1` varchar(255) NOT NULL,
  `customer_address2` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime NOT NULL -->
