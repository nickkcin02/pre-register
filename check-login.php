<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php  
if (isset($_POST["username"]) && isset($_POST["password"])) {
	require_once "connection.php";

	$username = $_POST["username"];
	$password = md5($_POST["password"]);


	$sql = "SELECT * FROM student WHERE studentID = '$username' AND password = '$password' ";
	$result = mysqli_query($conn, $sql);
	// echo mysqli_num_rows($result);

	if (mysqli_num_rows($result) > 0) {
		//echo "login success";
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["role"] = 'Student';
		session_write_close();


		echo '<script type="text/javascript">';
		echo "document.addEventListener('DOMContentLoaded', function(event) {swal('Success','Welcome Student','success').then((value) => {
			window.location = '../welcome'
		})});";
		echo '</script>';




	} 
	else {
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			session_start();
			$_SESSION["username"] = $username;
			$_SESSION["role"] = 'Admin';
			session_write_close();


			echo '<script type="text/javascript">';
			echo "document.addEventListener('DOMContentLoaded', function(event) {swal('Success','Welcome Admin','success').then((value) => {
				window.location = '../welcome'
			})});";
			echo '</script>';
		}
		else{
			echo '<script type="text/javascript">';
			echo "document.addEventListener('DOMContentLoaded', function(event) {swal('Invalid!','Incorrect username and password','error').then((value) => {
				window.location = '../'
			})});";
			echo '</script>';
		}
	}

	mysqli_close($conn);
}
else
{
	echo '<script type="text/javascript">';
	echo "document.addEventListener('DOMContentLoaded', function(event) {swal('Missing!','Please fill your username and password correctly.','warning').then((value) => {
			window.location = '../'
		})});";
	echo '</script>';
}



?>