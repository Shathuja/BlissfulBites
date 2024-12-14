<?php
	require_once 'dbconf.php';
	function AddData($connect,$Full_Name,$EmailAddress,$UserName,$Password){
		try {
            $hashed_Password = password_hash($Password, PASSWORD_DEFAULT);
            
		
			$sql = "INSERT INTO SignUp VALUES('$Full_Name','$EmailAddress','$UserName','$hashed_Password')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				//  echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../homepage.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$Full_Name = $_POST['Full_Name'];
		$EmailAddress = $_POST['Email_Address'];
		$UserName= $_POST['UserName'];
		$Password = $_POST['Password'];
		AddData($connect,$Full_Name,$EmailAddress,$UserName,$Password);
	}
	

	?>