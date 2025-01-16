<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blisssful Bites</title>
     <link rel="stylesheet" href="css/sellerstyle.css">
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
    <section>
    <div class="container">
        <h1>Seller's Area</h1>
        <form action="/create_account" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="sellername">Seller Name</label>
                <input type="text" id="sellerName" name="sellerName" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="proctuct name">Product Name</label>
                <textarea id="productname" name="productname" rows="4" placeholder="Product Name" required></textarea>
            </div>
            <div class="form-group">
                <label for="sellerEmail">Contact Email</label>
                <input type="email" id="sellerEmail" name="selleremail" placeholder="Enter your email" required>
            </div>


            <div class="form-group">
                <label for="sellercontactnumber">Contact Number</label>
                <input type="contactnumber" id="sellercontactnumber" name="designerContactNumber" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="productupload">Upload Product</label>
                <input type="file" id="Uploadproduct" name="Uploadproduct" accept="image/*" required>
            </div>

            <button type="submit">Create Account & Upload Product</button>
        </form>

        
    </div>
    <img src="image/ima.jpg" class="feature-img">
</section>
    </div>
</body>
</html>
