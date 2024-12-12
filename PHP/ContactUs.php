<?php
	require_once 'dbconf.php';
	function AddData($connect,$Full_Name,$Email_Address,$Comment){
		try {
        $sql = "INSERT INTO ContactUs VALUES('$Full_Name','$Email_Address','$Comment',)";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				//  echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$Full_Name = $_POST['Name'];
		$Email_Address = $_POST['Email'];
		$Comment = $_POST['Message'];
		AddData($connect,$Full_Name,$Email_Address,$Comment);
	}
	

	?>