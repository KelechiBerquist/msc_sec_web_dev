<?php


class CustomerController{
	public static function get_login(){
		require __DIR__ . '/../content/login.php';
	}
	public static function post_login(){
		$arr = (array) $_POST;
		global $repo;

		$password_verified = $repo->find_customer_by_username_password($arr);


		if ($password_verified){
			$_SESSION["auth_user"] = $repo->find_customer_by_username($arr["username"]);
			$user_forename = $_SESSION["auth_user"]["customer_forename"];
			$_SESSION['login_msg'] = "Welcome back, {$user_forename}!" ;
			$statusCode = 303;
			header('Location: ' . '/movie/listing', true, $statusCode);
			die();
		} else {
			$_SESSION['login_msg'] = 'Customer not found with username and password provided. Please check username and/or password';
			$statusCode = 303;
			header('Location: ' . '/customer/login', true, $statusCode);
			die();
		}
	}


	public static function get_user_reg(){
		require __DIR__ . '/../content/customer_reg.php';

	}
	public static function post_user_reg(){
		$arr = (array) $_POST;
		global $repo;

		$arr["customerID"] = NULL;
		$userAdded = $repo->insert_new_customer($arr);

		$statusCode = 303;
		$_SESSION['user_reg_msg'] = $userAdded["msg"];
		header('Location: ' . '/customer/register', true, $statusCode);
		die();
	}

	// Mhk4UgtzUqqL7Pg7a563

	// TD code: SS24
	// I tried to set up external transfer and was told that data in  my profile is invalid/incomplete


}
