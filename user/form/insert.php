<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'ecommarce') or die('Connection Failed');
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);;


    $query = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    $Dup_email = "SELECT * FROM user WHERE email='$email'";
    $Dup_username = "SELECT * FROM user WHERE username='$username'";

    if(mysqli_num_rows(mysqli_query($conn, $Dup_email))>0){
        echo "<script>alert('Email already exists');
        window.location.href='register.php';
        </script>";
    }else if(mysqli_num_rows(mysqli_query($conn, $Dup_username))>0){
        echo "<script>alert('Username already exists');</script>";
    }else{
        if (mysqli_query($conn, $query)) {
            echo "<script>alert(' Registration Successfully');
            window.location.href='login.php';
            </script>";
        } else {
            echo "<script>alert('Registration failed');</script>";
        }
    }
}
?>
