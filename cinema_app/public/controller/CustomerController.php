<?php


class CustomerController{
	/*
		Controllers for the actions on `/customer`
	*/
	public static function get_login(){
		/*
			Controls the actions following get requests on
			`/customer/login` is requested
		*/
		require __DIR__ . '/../content/login.php';
	}
	public static function post_login(){
		/*
			Controls the actions following post requests on
			`/customer/login` is requested
		*/
		$arr = (array) $_POST;
		global $repo;

		$password_verified = $repo->verify_username_password($arr);


		if ($password_verified){
			$_SESSION["auth_user"] = $repo->find_customer_by_username($arr["username"]);
			$user_forename = $_SESSION["auth_user"]["customer_forename"];
			$_SESSION['view_msg'] = "Welcome back, {$user_forename}!" ;
			$statusCode = 303;
			header('Location: ' . '/movie/listing', true, $statusCode);
			die();
		} else {
			$_SESSION['view_msg'] = 'Customer not found with username and password provided.<br>
			Please check username and/or password';
			$statusCode = 303;
			header('Location: ' . '/customer/login', true, $statusCode);
			die();
		}
	}
	public static function get_logout(){
		/*
			Controls the actions following get requests on
			`/customer/logout` is requested
		*/
		$user_forename = $_SESSION["auth_user"]["customer_forename"];
		unset($_SESSION["auth_user"]);
		$_SESSION['view_msg'] = "Logout successful. Goodbye {$user_forename}";
		$statusCode = 303;
		header('Location: ' . '/movie/listing', true, $statusCode);
		die();
	}


	public static function get_user_reg(){
		/*
			Controls the actions following get requests on
			`/customer/register` is requested
		*/
		require __DIR__ . '/../content/customer_reg.php';

	}
	public static function post_user_reg(){
		/*
			Controls the actions following get requests on
			`/customer/register` is requested
		*/
		$arr = (array) $_POST;
		global $repo;

		$arr["customerID"] = NULL;
		$userAdded = $repo->insert_new_customer($arr);

		$statusCode = 303;
		$_SESSION['view_msg'] = $userAdded["msg"];
		header('Location: ' . '/customer/register', true, $statusCode);
		die();
	}
}
