<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
try {
	$conn = new mysqli($servername, $username, $password, $database);
} catch (mysqli_sql_exception $e) {
	die ("connection failed: check Databse setting <br>". $o);
}

?>