<?php 

	class userClass{

		public function login($username, $password){
			$password = md5($password);
			$db = db();
			$stmt = $db->prepare('SELECT userRole FROM auth WHERE userID = :userID AND password = :password');

			$stmt->bindParam("userID", $username,PDO::PARAM_STR);
			$stmt->bindParam("password", $password,PDO::PARAM_STR);

			$stmt->execute();

			// $stmt = $db->query("SELECT firstName FROM studentInfo WHERE studentID = '$username' AND password = '$password' ");

			$count = $stmt->rowCount();

			if($count){
				$data = $stmt->fetch(PDO::FETCH_OBJ);
				session_start();
				$_SESSION['user'] = $data->userRole;
				return $data->userRole;
			}else{
				return "Error";
			}
		}
		
	}
?>