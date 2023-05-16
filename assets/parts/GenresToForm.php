<?php
	include_once "C:/xampp/htdocs/eLibrary_PHP/assets/includes/dbh.inc.php";
	if(empty($conn)){
		$conn = new stdClass();
	}
	$sql = "SELECT * FROM genres ORDER BY genre;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL statement failed!";
	} else {
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
	}

	$ind = 1;
	while ($genres = mysqli_fetch_assoc($result))
	{
		if ($ind === 1)
		{
			echo
				'<input type="radio" id="' . $genres["genre"] . '" name="genre" value="' . $genres["genre"] . '" checked>
							 <label for="' . $genres["genre"] . '">' . $genres["genre"] . '</label><br>';
		}
		else
		{
			echo
				'<input type="radio" id="' . $genres["genre"] . '" name="genre" value="' . $genres["genre"] . '">
						     <label for="' . $genres["genre"] . '">' . $genres["genre"] . '</label><br>';
		}
		$ind++;
	}