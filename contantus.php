<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="css/contantusstyle.css">
</head>
<body>
    <div class="hero">

        <nav>
            <img src="image/logo.jpeg" style="width:80px; height: 60px;">
            <div class="logo">Blissful Bites</div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></a></li>
                <li><a href="menu.php">Menu</a></a></li>
                <li><a href="seller.php">Seller's Area</a></a></li>
                <li><a href="contantus.php">Contact Us</a></a></li>
                <li><a href="rating.php">Rating</a></a></li>
            </ul>
            <div class="account-cart">
                <a href="account.php">My account</a>
            
            </div>
        </nav>
    <div class="container">
        
        <div class="info-section">
            <div class="info-item">
                <img src="image/location.png" alt="Location Icon">
                <p class="info-text">No33,Malusanthi,Alvai South,Alvai.</p>
            </div>
            <div class="info-item">
                <img src="image/phone.png" alt="Phone Icon">
                <p class="info-text">+94 760497663</p>
            </div>
            <div class="info-item">
                <img src="image/hours.png" alt="Hours Icon">
                <p class="info-text">Mon-sat: 9am - 5pm</p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <center><h2>Get in touch</h2></center>
            <form action="PHP/ContactUs.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Comment or Message</label>
                    <textarea id="message" name="Message" rows="4" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>