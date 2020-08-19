<?php
	$local = "localhost";
	$database = "vmfotografia";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($local, $username, $password, $database);
	// Check connection
	if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";

?>