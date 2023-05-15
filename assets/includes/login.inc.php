<?php

	if(isset($_POST["register"])) {         //overenie či bol odoslaný(existuje) "register"

		$username = $_POST["username"];
		$pwd = $_POST["pwd"];

		require_once "dbh.inc.php";
		require_once "functions.inc.php";

		loginUser($conn, $username, $pwd);
	}
	else
	{
		header("location: ../../form_login.php");
		exit();
	}