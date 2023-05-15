<?php
include_once "C:/xampp/htdocs/eLibrary_PHP/assets/includes/dbh.inc.php";
$sql = "SELECT * FROM genres ORDER BY genre;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql))
{
	echo "SQL statement failed!";
}
else
{
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
}
while ($row = mysqli_fetch_assoc($result))
{
	echo '<li><a class="text-decoration-none" href="shop.php?genre=' . $row["genre"] . '">' . $row["genre"] . '</a>';
}
