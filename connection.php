<?php




	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "Library";

	// // $servername = "23.101.29.16";
	// // $username = "dsi215u09";
	// // $password = "RDFGYHW3";
	// // $dbname = "u09db";

	// // Create connection
	// $conn = mysqli_connect($servername, $username, $password, $dbname);
	// // Check connection
	// if (!$conn) {
	//     die("Connection failed: " . mysqli_connect_error());
	// }


	$servername = "hub.aomwara.me";
	$username = "root";
	$password = "cpe327db";
	$database = "Prayuth_DB";

// Create connection
	


	try {
  		$conn = new PDO("mysql:host={$servername};dbname={$database}", $username, $password);
  // set the PDO error mode to exception
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		$res[] = "Connected successfully"; 
  	} catch(PDOException $e) {
  		$res[] =  "Connection failed: " . $e->getMessage();
	}

?>

