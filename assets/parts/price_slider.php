<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			function showRangeValue(c)
			{
				document.getElementById("sliderValue").innerHTML=c.value;
			}
		</script>
	</head>
</html>
<?php
	include_once "assets/parts/header.php";
	include_once "assets/includes/dbh.inc.php";
	if(empty($conn)){
		$conn = new stdClass();
	}
	$sql_max = "SELECT MAX(price) as max_price FROM books;";
	$sql_min = "SELECT MIN(price) as min_price FROM books;";
	$stmt_max = mysqli_stmt_init($conn);
	$stmt_min = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt_max, $sql_max) || !mysqli_stmt_prepare($stmt_min, $sql_min))
	{
		echo "SQL statement failed!";
	}
	else
	{
		mysqli_stmt_execute($stmt_max);
		$result_max = mysqli_stmt_get_result($stmt_max);
		$row_max = mysqli_fetch_assoc($result_max);

		mysqli_stmt_execute($stmt_min);
		$result_min = mysqli_stmt_get_result($stmt_min);
		$row_min = mysqli_fetch_assoc($result_min);
	}
	echo    '<div class="d-flex">
			    <div class="p-2 flex-fill">' . $row_min["min_price"] . '€</div>
			    <div class="p-2 flex-fill slidecontainer">
			        <input type="range" oninput="showRangeValue(this)" min="' . $row_min["min_price"] . '" max="' . $row_max["max_price"] . '" value="' . $row_max["max_price"] . '" class="slider" id="myRange">
				</div>
			    <div class="p-2 flex-fill">' . $row_max["max_price"] . '€</div>
			</div>
			<div class="d-flex justify-content-center"><span id="sliderValue">' . $row_max["max_price"] . '</span><p>€</p></div>';
	//ON CLICK UP UPDATE THE BOOK SELECTION
?>
