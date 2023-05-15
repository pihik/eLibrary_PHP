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
	<div class="row h1 justify-content-center">Register:</div>
	<div class="row justify-content-center">
		<div class="col-12 col-md-4 m-4">
			<form action="assets/includes/signup.inc.php" method="post">
				<div class="form-group">
					<label for="username">User Name</label>
					<input type="text" class="form-control" name="username" id="name" placeholder="User Name" required>
				</div><br>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div><br>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
				</div><br>
				<div class="form-group">
					<label for="pwdrepeat">Repeat Password</label>
					<input type="password" class="form-control" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat Password" required>
				</div><br>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="checkbox" required>
					<label class="form-check-label" for="checkbox">Accept terms and conditionts</label>
				</div><br>
				<button type="submit" class="btn btn-danger" name="register">Sign up</button>
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
