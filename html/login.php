<?php
    include('connect.php');
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body >
    <h1> Log In </h1> 
    <div class=" main-content">
    <form method="post" action="">
        <label >Email</label><br>
        <input  type="text" name="em" required><br>

        <label >Password</label><br>
        <input  type="password" name="psw" required><br>

        <input type="submit" name="login">
    </form>
    </div>
<p >Not yet a member? <a href="signup.php">Sign Up</a></p>
</body>
</html>