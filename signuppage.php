<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signupstyle.css">
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
                <a href="signuppage.php">My account</a></a>
            
            </div>
        </nav>
        
    <div class="container">
        <div class="background-image"></div>
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="PHP/SignUp.php" method="post" id="SignUp">
                <label for="fullname">Full Name</label>
                <input type="text" name="Full_Name" placeholder="Name...">
                
                <label for="email">Email</label>
                <input type="email" name="Email_Address" placeholder="Email address...">
                
                <label for="username">Username</label>
                <input type="text" name="UserName" placeholder="Username...">
                
                <label for="password">Password</label>
                <input type="password" name="Password" id="Password" placeholder="">
                <div>
                <label for="repeat-password">Repeat Password</label>
                <input type="password" id="Rpassword" placeholder="">
                <div class="error_message" id="error_message"> Passwords do not match!</div>
                </div>
                <div class="terms">
                    <input type="checkbox" id="terms">
                    <label for="terms">I agree to the Terms of Use</label>
                </div>
                
                
                <button name="submit" >Sign Up</button>
                <p class="signin">Already have an account? <a href="login.php">Sign in</a></p>

                
            </form>
        </div>
    </div>
    </div>
    <script src="js/SignUp.js"></script>
</body>
</html>
