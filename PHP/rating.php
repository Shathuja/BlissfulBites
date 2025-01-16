<?php
	require_once 'dbconf.php';
	function AddData($connect,$star,$review){
		try {
        $sql = "INSERT INTO Rating VALUES('$star','$review')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				  echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$star = $_POST['star'];
		$review = $_POST['review'];
		
		AddData($connect,$star,$review);
	}
	

	?>