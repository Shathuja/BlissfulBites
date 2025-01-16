<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

    <div class="hero">

        <nav>
            <img src="image/logo.jpeg" style="width:80px; height: 60px;">
            <div class="logo">Blissful Bites</div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="seller.php">Seller's Area</a></li>
                <li><a href="contantus.php">Contact Us</a></li>
                <li><a href="rating.php">Rating</a></li>
            </ul>
            <div class="account-cart">
                <a href="account.php">My account</a>
            
            </div>
        </nav>

    <div class="login-container">
        <h1>Login to Your Account</h1>
        <form id="loginForm" action="PHP/login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <center> <button name="login" type="submit">LOGIN</button></center>
        </form>
        <p class="message">Not registered? <a href="signuppage.php">Create an account</a></p>
    </div>
    <script src="script.js"></script>
    </header>
</body>
</html>
