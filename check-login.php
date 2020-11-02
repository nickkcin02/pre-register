<?php
    include'./connection.php';
	$username = $_POST["username"];
    $password = MD5($_POST["password"]);


    $result = $conn->query("SELECT studentID FROM studentInfo WHERE studentID = '$username' AND password = '$password' "); 
    // $stmt->execute();


    if ($result->fetchColumn() > 0)
    {
        $res[] = 1;
    }
    else 
    {
        $res[] = 0;
    }
    echo json_encode($res);

	
    // $sql = "INSERT INTO `bookLend`(`studentID`, `bookID`, `dueDate`) VALUES ('$studentID','$bookID',adddate(now(),7));" ;
    // if(mysqli_query($conn, $sql)){
    //     $res[] = 1;
    // }
    // else{
    //     $res[] = 0;
    // }

    // $res[] = mysqli_error($conn);
    

?>