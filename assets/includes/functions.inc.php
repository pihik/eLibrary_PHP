<?php

	function invalidEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	function pwdMatch($pwd, $pwdRepeat)
	{
		if ($pwd !== $pwdRepeat)
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	function usernameExits($conn, $username, $email)
	{
		$sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
		$stmt = mysqli_stmt_init($conn);            //inicializácia nového príkazu na použitie
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("location: ../../form_signup.php?error=stmtfailed");
			exit();
		}
		mysqli_stmt_bind_param($stmt, "ss", $username, $email);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);        //vráti všetky výsledky príkazu SELECT

		if ($row = mysqli_fetch_assoc($resultData))         //privolá ďalší riadok z resultData (readline)
		{
			return $row;
		}
		else{
			$result = false;
			return $result;
		}

		mysqli_stmt_close($stmt);
	}


	function createUser($conn, $email, $username, $pwd)
	{
		$sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("location: ../../form_signup.php?error=stmtfailed");
			exit();
		}

		$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: ../../index.php?error=none");
		exit();
	}
	function loginUser($conn, $username, $pwd) {
		$userExists = usernameExits($conn, $username, $username);

		if ($userExists === false) {
			header("location: ../../form_login.php?error=usernotfound");
			exit();
		}

		$pwdHashed = $userExists["usersPwd"];
		$checkPwd = password_verify($pwd, $pwdHashed);

		if ($checkPwd === false) {
			header("location: ../../form_login.php?error=incorrectpassword");
			exit();
		}
		else if ($checkPwd === true) {
			session_start();
			$_SESSION["userid"] = $userExists["id"];
			$_SESSION["username"] = $userExists["usersName"];
			header("location: ../../index.php?error=none");
			exit();
		}
	}