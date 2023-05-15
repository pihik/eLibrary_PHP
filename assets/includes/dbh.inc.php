<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "library";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
if (!$conn){
	die("Could not connect Database: " . mysqli_connect_error());
}