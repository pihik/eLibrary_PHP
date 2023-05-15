<!DOCTYPE html>
<html lang="en">

<?php
	include_once "assets/parts/header.php";
?>
<body style="min-height: 100vh;">
<?php
	include_once "assets/parts/nav.php";
	include_once "assets/parts/modal.php";
?><br><br>
<div class="container">
	<div class="row h1 justify-content-center">Log in:</div>
	<div class="row justify-content-center">
		<div class="col-12 col-md-3 m-4">
			<form action="assets/includes/login.inc.php" method="post">
				<div class="form-group">
					<label for="username">Email/Username</label>
					<input type="text" class="form-control" name="username" id="username" aria-describedby="nameHelp" placeholder="Enter email or username" required>
					<small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div><br>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
				</div><br>
				<button type="submit" class="btn btn-success" name="register">Log in</button>
			</form>
		</div>
	</div>
</div>
<!-- Start Footer -->
<?php
	include_once "assets/parts/footer.php";
	include_once "assets/parts/scripts.php";
?>
<!-- End Script -->
</body>
