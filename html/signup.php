<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body >
    <img src="../image/logo.png" alt="Artify" class="logo" />
    <h1>SignUp</h1>
    
    <div class=" main-content">
    <form action="signup.php" method="post" >
<div>
<label for="name">Name</label>
<input type="text" id="name" name="un" required>
</div>
<div>
<label for="email">Email</label>
<input type="email" id="email" name="em" required>
</div>
<div>
<label for="pass">Password</label>
<input type="password" id="password" name="psw1" required>
</div>

<div>
<label for="pass_confirmation">Repeat Password</label>
<input type="password" id="password_confirmation" name="psw2" required>
</div>
<input type="submit" name="register">

</form>
    </div>
    <div id="simg">

    </div>
    <p > <a href="login.php">LoGIn</a></p>
</body>
</html>