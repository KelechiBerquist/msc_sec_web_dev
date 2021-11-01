<?php include __DIR__ . '/templates/header.php'; ?>

<div class='w-40 pad-10'>
	<div class="w-100 pad-1 text-sz-md text-wt-reg pg-header-banner text-align-center">Login</div>

	<form method="post" action="/customer/login">
		<div class='w-100 d-inline pad-tb-2 w-lg text-sz-rg'>
			<label class='d-inline pad-tb-2 w-lg text-sz-rg' for="username"> Username </label>
			<input class='d-inline pad-tb-2 w-lg text-sz-rg' name="username" id="username" />
		</div>
		<div class='w-100 d-inline pad-tb-2 w-lg text-sz-rg'>
			<label class='d-inline pad-tb-2 w-lg text-sz-rg' for="password"> Password </label>
			<input class='d-inline pad-tb-2 w-lg text-sz-rg' name="password" id="password" type='password'/>
		</div>
		<div>
			<input class='d-inline pad-tb-2 w-lg text-sz-rg button' type="submit" value="Login">
		</div>

	</form>
</div>

<?php include __DIR__ . '/templates/footer.php';?>
