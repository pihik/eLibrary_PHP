<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>

<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "usernametaken") {
			echo "<script>alert('Username taken')</script>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<script>alert('Invalid Email!')</script>";
		}
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<script>alert('Your passwords does not match!')</script>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<script>alert('Database ERROR, contact admin')</script>";
		}
		else if ($_GET["error"] == "none") {
			echo "<script>alert('You have signed up!')</script>";
		}
		else if ($_GET["error"] == "usernotfound") {
			echo "<script>alert('UserName not found!')</script>";
		}
		else if ($_GET["error"] == "incorrectpassword") {
			echo "<script>alert('Incorrect Password!')</script>";
		}
	}
?>