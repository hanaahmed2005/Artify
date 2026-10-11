<?php 
include('connect.php'); 
$records = mysqli_query($db, "SELECT * FROM product");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/product.css">
</head>

<body>

<nav class="navbar">
    <img src="../image/logo.png" alt="Artify" class="logo" />
    <ul>
        <li><a href="homepage.php" class="nav-button">Home</a></li>
        <li><a href="contactus.php" class="nav-button">Contact Us</a></li>
        <li><a href="signup.php" class="nav-button">Sign Up</a></li>
        <li><a href="login.php" class="nav-button">Login</a></li>
        <li><a href="aboutus.php" class="nav-button">About Us</a></li>
        <li><a href="login.php" class="nav-button">Log Out</a></li> 
    </ul>
</nav>

<div class="products-section">
    <div class="container">

        <?php while($data = mysqli_fetch_array($records)) { ?>

        <div class="item">

            <div class="producttop">
                <img src="../image/<?php echo ($data['image']); ?>" alt="product image">
                
            </div>

            <div class="product-bottom">
                <p><?php echo ($data['productname']); ?></p>
                <span><?php echo ($data['price']); ?> EGP</span>

                <div class="actions">

    <a href="productedit.php?id=<?php echo $data['id']; ?>">
        <button type="button"
            style="background-color:#3498db; color:white; padding:8px 16px; border:none; border-radius:6px; cursor:pointer;">
            Edit
        </button>
    </a>

    <a href="delete.php?id=<?php echo $data['id']; ?>">
        <button type="button"
            style="background-color:#e74c3c; color:white; padding:8px 16px; border:none; border-radius:6px; cursor:pointer;">
            Delete
        </button>
    </a>

</div>
            </div>

        </div>

        <?php } ?>

    </div>
</div>

<footer class="footer">
    <p class="footer-text">© 2025 Artify. All rights reserved.</p>
</footer>

</body>
</html>