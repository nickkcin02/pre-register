<?php




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Library";

	// $servername = "23.101.29.16";
	// $username = "dsi215u09";
	// $password = "RDFGYHW3";
	// $dbname = "u09db";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>