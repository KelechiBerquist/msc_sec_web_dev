<?php include __DIR__ . '/templates/header.php'; ?>

<div>
	<?php
		if( isset( $_SESSION['login_msg'] ) ) {
			echo($_SESSION['login_msg']);
			unset($_SESSION['login_msg']);
		}
	?>

</div>


<div class="pad1 text-sz-md text-wt-reg">Login</div>

<form method="post" action="/customer/login">
	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="username"> Username </label>
		<input name="username" id="username" />
	</div>
	<div class='pad-tb-2 w-lg text-sz-rg'>
		<label for="password"> Password </label>
		<input name="password" id="password" />
	</div>
	<div>
		<input type="submit" value="Login">
	</div>

</form>


<?php include __DIR__ . '/templates/footer.php'; print_r($_GET) ?>
