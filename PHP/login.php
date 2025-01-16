<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT UserName,Password FROM SignUp WHERE UserName = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["Password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
                header("Location: ../homepage.php");
                exit; // Ensure no further code runs after redirection
    } else {
        $error = "Invalid username or password.";
    }
    }
    $connect->close(); // Close the database connection
    header("Location: ../login.html?error=" . urlencode($error));
    exit;
}
?>