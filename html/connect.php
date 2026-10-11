<?php
if(!isset($_SESSION)){
    session_start();
}
$error=array();
$db=mysqli_connect('localhost','root','','iatask');



//signup
if(isset($_POST['register'])){
    $username=mysqli_real_escape_string($db,$_POST['un']);
    $email=mysqli_real_escape_string($db,$_POST['em']);
    $password1=mysqli_real_escape_string($db,$_POST['psw1']);
    $password2=mysqli_real_escape_string($db,$_POST['psw2']);

    if(empty($username)){
        array_push($error,"Username is required");
    }

    if(empty($email)){
        array_push($error,"Email is required");

    }

    if(empty($password1)){
        array_push($error,"Password is required");
        
    }

    if(empty($password2)){
        array_push($error,"Confirm password is required");
        
    }

    if($password1!=$password2){
        array_push($error,"Passwords do not match");
        echo "<p style='color:red;'>Passwords do not match</p>";
    }

    if(count($error)==0){
        $sql="INSERT INTO user (name,email,password,confirmpassword) Values('$username','$email','$password1','$password2')";
        mysqli_query($db,$sql);
        header("Location: login.php");
    }
}






//login
if(!isset($_SESSION)){
    session_start();
}

$error=array();
$db=mysqli_connect('localhost','root','','iatask');

if(isset($_POST['login'])){

$email=mysqli_real_escape_string($db,$_POST['em']);
$password=mysqli_real_escape_string($db,$_POST['psw']);

if (empty($email)){
    array_push($error,"Email is required");
}

if(empty($password)){
    array_push($error,"Password is required");
}

if (count($error)==0){

$query="SELECT * FROM user WHERE email='$email' AND password='$password'";
$result=mysqli_query($db,$query);

if(mysqli_num_rows($result)==1){
    $_SESSION['username']=$email;
    header('location:homepage.php');
}else{
    echo "<p style='color:red; font-size:20px; font-weight:bold;'>Wrong email or password</p>";
}

}
}
?>






