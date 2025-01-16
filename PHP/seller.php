<?php
session_start();
require_once 'dbconf.php';
$user=$_SESSION['user_name'];

function  AddProduct($connect,$seller_name,$product_name,$upload_product ){
    try {
        $imgData = addslashes(file_get_contents($upload_product));
        $sql="INSERT INTO Seller value $imgData WHERE username='$user'";
        $result=mysqli_query($connect,$sql);

        if($result){

        }else{
            die('Error '.mysqli_error($connect));
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

if($_SERVER["REQUEST_METHOD"]== 'POST'){
    $seller_name = $_POST['sellername'];
		$product_name = $_POST['productname'];
		$seller_email= $_POST['selleremail'];
    $upload_product = $_FILES['uploadproduct']['tmp_name'];
    AddProduct($connect,$seller_name,$product_name,$upload_product );
}


?>