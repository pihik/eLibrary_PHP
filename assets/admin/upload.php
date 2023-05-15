<div class="books-upload">
	<form action="assets/includes/book-upload.inc.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="author"><b>Author</b></label>
			<input type="text" class="form-control" name="author" placeholder="JRR Tolkien"><br>
			<label for="title"><b>Title</b></label>
			<input type="text" class="form-control" name="title" placeholder="The fellowship of the ring"><br>
			<p><b>Select genre:</b></p>
			<?php
				include_once "assets/parts/GenresToForm.php";
			?>
			<br>
			<label for="totalAmt"><b>Price</b></label>
			<input type="number" step="0.01" class="form-control" name="price" id="totalAmt" placeholder="20"><br>
			<label for="file"><b>Choose 1:2 file format</b></label>
			<input type="file" class="form-control" name="imgName"><br>
			<button type="submit" class="form-control h3" name="submit"><b>Upload</b></button>
		</div>
	</form>
</div>