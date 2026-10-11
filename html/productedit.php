<?php
include('connect.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    die("No product selected");
}


$qry1 = mysqli_query($db, "SELECT * FROM product WHERE id='$id'");
$data = mysqli_fetch_array($qry1);


if(isset($_POST['update'])) {

    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $image = $_POST['image'];


    $sql1 = "UPDATE product 
             SET productname='$productname', price='$price', image='$image' 
             WHERE id='$id'";

    $edit = mysqli_query($db, $sql1);

    if($edit){
        mysqli_close($db);
        header("location: product.php");
        exit();
    } else {
        echo mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../css/productedit.css">
</head>

<body>

<nav class="navbar">
    <img src="../image/logo.png" alt="Artify" class="logo" />
    <ul>
        <li><a href="homepage.php" class="nav-button">Home</a></li>
        <li><a href="signup.php" class="nav-button">Sign Up</a></li>
        <li><a href="login.php" class="nav-button">Login</a></li>
        <li><a href="aboutus.php" class="nav-button">About Us</a></li>
        <li><a href="login.php" class="nav-button">Log Out</a></li>
    </ul>
</nav>

<section class="contact-header">
    <h1>Product Edit</h1>
    <span class="brush-line"></span>
</section>

<div class="main-content">

<form action="productedit.php?id=<?php echo $id; ?>" method="POST">

    
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label>Product Name</label>
    <input type="text" name="productname" value="<?php echo $data['productname']; ?>" required>

    <label>Price</label>
    <input type="number" name="price" value="<?php echo $data['price']; ?>" required>

    <label>Image</label>
    <input type="text" name="image" value="<?php echo $data['image']; ?>" required>

    <input type="submit" name="update" value="Update Product">

</form>

</div>

</body>
</html>