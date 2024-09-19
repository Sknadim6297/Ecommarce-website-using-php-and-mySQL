<?php
$con=mysqli_connect("localhost","root","","ecommarce");

$admin_email=$_POST['email'];
$admin_password=$_POST['password'];


$result=mysqli_query($con,"SELECT * FROM `admin` WHERE email='$admin_email' AND password='$admin_password'");
session_start();


if(mysqli_num_rows($result)>0){
    $_SESSION['admin']=$admin_email;
    echo "
    <script>
    alert('Login Succesfully');
    window.location.href='../mystore.php';
    </script>";
}
else{
    echo "
    <script>
    alert('Please enter correct email and password');
    window.location.href='login.php';
    </script>";
}
?>
