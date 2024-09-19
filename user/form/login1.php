<?php


$email = $_POST['email'];
$password = $_POST['password'];

$con=mysqli_connect("localhost","root","","ecommarce") or die('Could not connect to the server');

$result=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");

session_start();

if(mysqli_num_rows($result)){
    $_SESSION['email']=$email;
   echo "<script>alert('Login successful');
   window.location.href='../index.php';
   </script>";
}else{
    echo "<script>alert('Incorrect email or password');
    window.location.href='login.php';
    </script>";
}

?>
