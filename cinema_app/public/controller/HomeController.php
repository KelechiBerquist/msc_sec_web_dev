<?php


class HomeController{
	/*
		Controllers for the actions on `/`
	*/
	public static function get_home(){
		/**
		 * Controls the actions following get requests on `/`
		 */
		require __DIR__ . '/../content/home.php';
	}


	public static function post_home(){
		/**
		 * Controls the actions following post requests on `/`
		 */
		require __DIR__ . '/../content/home.php';
	}
}
