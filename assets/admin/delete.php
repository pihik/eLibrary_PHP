<?php
include_once "../includes/dbh.inc.php";
if(empty($conn)){
	$conn = new stdClass();
}
if (isset($_GET["id"])) {
	$sql = "DELETE FROM books WHERE id ='" . $_GET["id"] . "'";
	if (mysqli_query($conn, $sql)) {
		header('Location: ../../shop.php?upload=success');
	} else {
		echo "Can't delete" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
else{
	header('Location: index.php');
}