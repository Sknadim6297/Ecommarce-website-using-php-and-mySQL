<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    *{
      font-family: 'Poppins', sans-serif;
    }
    </style>
  </head>
  <?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:form/login.php');
}
?>
  <body>
  <nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand"><h1>Sk.Store  </h1></a>
    <span><i class="fa-solid fa-user-tie"></i>
    hello,<?php echo $_SESSION['admin']?>|
    <i class="fa-solid fa-right-from-bracket"></i>
  <a href="form/logout.php" class="text-decoration-none">logout</a> |
  <a href=""  class="text-decoration-none">Admin Panel</a>
</span>
  
  </div>
</nav>

<div>

<h2 class="text-center">Dashboard</h2>
</div>
<div class=" col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none font-bold fs-4 fw-bold px-5">Add Product</a>
    <a href="" class="text-white text-decoration-none font-bold fs-4 fw-bold px-5">User</a>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>