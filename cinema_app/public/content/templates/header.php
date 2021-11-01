<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title> Oakdale Cinema </title>
		<link rel="stylesheet" href="/../../assets/css/index.css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
	</head>
	<body>
	<div class="w-100 h-20 nav-banner text-sz-md text-wt-bold">
		<div class="d-inline pad-2 text-align-left w-30 nav-banner-text">
			<a class="" href="/">Oakdale Cinema</a>
		</div>
		<div class="d-inline text-align-right w-60">
			<?php
				if (array_key_exists("auth_user", $_SESSION)){
					$auth_nav = "
						<div class='d-inline w-20 marg-2 text-align-right nav-banner-text'>
							<a class='' href='/customer/logout'>Logout</a>
						</div>
					";
				} else {
					$auth_nav = "
						<div class='d-inline w-20 marg-2 text-align-right nav-banner-text'>
							<a class='' href='/customer/login'>Login</a>
						</div>
						<div class='d-inline w-20 marg-2 text-align-right nav-banner-text'>
							<a class=' ' href='/customer/register'>Register</a>
						</div>
					";
				}
				echo $auth_nav;
			?>

			<div class='d-inline w-50 marg-2 text-align-right nav-banner-text'>
				<a class=' ' href="/movie/listing">Listings</a>
			</div>
		</div>
	
	</div>
		<div class="bg-image"></div>
		<div class="container">

		
	<?php
		if( isset( $_SESSION['view_msg'] ) ) {
			$msg = $_SESSION['view_msg'];
			$msg_tag = "
				<div class='view-msg w-70 pad-3 text-sz-rg text-wt-reg text-align-center'>
				{$msg}
				</div>
			";
			echo($msg_tag);
			unset($_SESSION['view_msg']);
		}
	?>


