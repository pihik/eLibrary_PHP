<!DOCTYPE html>
<html lang="en">

<?php
	include_once "assets/includes/dbh.inc.php";

	$result = mysqli_query($conn, "SELECT * FROM books WHERE id='" . $_GET['id'] . "'");
	$row = mysqli_fetch_array($result);

	include_once "assets/parts/header.php";
?>
<body style="min-height: 100vh;">

<?php
	include_once "assets/parts/nav.php";
	include_once "assets/parts/modal.php";
?>
<div class="container py-5">
	<div class="row">
		<div class="col-lg-9">
			<div class="books-upload">
				<form action="assets/admin/update.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="author"><b>Author</b></label>
						<input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" placeholder="Author"><br>
						<label for="title"><b>Title</b></label>
						<input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" placeholder="title"><br>
						<p><b>Select genre:</b></p>
						<?php
							include_once "assets/parts/GenresToForm.php";
						?>
						<br>
						<label for="totalAmt"><b>Price</b></label>
						<input type="number" step="0.01" class="form-control" name="price" value="<?php echo $row['price']; ?>" id="totalAmt" placeholder="price"><br>
						<label for="file"><b>Choose 1:2 file format</b></label>
						<input type="file" class="form-control" name="imgName"><br>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<button type="submit" class="form-control h3" name="update"><b>Upload</b></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
	include_once "assets/parts/footer.php";
	include_once "assets/parts/scripts.php";
?>
</body>

</html>