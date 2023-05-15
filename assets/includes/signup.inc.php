<?php
if (isset($_POST["register"])) {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

	require_once "dbh.inc.php";
	require_once "functions.inc.php";

	if (invalidEmail($email) !== false)
	{
		header("location: ../../form_signup.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false)
	{
		header("location: ../../form_signup.php?error=passwordsdontmatch");
		exit();
	}
	if (usernameExits($conn, $username, $email) !== false)
	{
		header("location: ../../form_signup.php?error=usernametaken");
		exit();
	}

	createUser($conn, $email, $username, $pwd);
}
else {
	header("location: ../../form_signup.php");
	exit();
}