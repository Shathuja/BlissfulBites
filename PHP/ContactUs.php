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
            header('Location: ../homepage.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$Full_Name = $_POST['Full_Name'];
		$Email_Address = $_POST['Email_Address'];
		$Comment = $_POST['Comment'];
		AddData($connect,$Full_Name,$Email_Address,$Comment);
	}
	

	?>