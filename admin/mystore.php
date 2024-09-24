<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .center-screen {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 80vh;
      /* Full screen height minus some for the navbar */
    }
  </style>
</head>
<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('location:form/login.php');
}
?>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="../user/index.php">
        <h1>Sk.Store</h1>
      </a>
      <span>
        <i class="fa-solid fa-user-tie"></i> hello, <?php echo $_SESSION['email'] ?> |
        <i class="fa-solid fa-right-from-bracket"></i>
        <?php
        date_default_timezone_set('Asia/Kolkata');
        echo date("h:i:s A");
        ?>
      </span>
    </div>
  </nav>
  <h2 class="text-center mt-2">Welcome to Dashboard <?php  ?> <br></h2>
  <div class="center-screen">
    <div class="col-md-6  text-center d-flex justify-content-center gap-2">
      <a href="product/index.php" class=" text-white text-decoration-none font-bold fs-4 fw-bold px-5 bg-black p-2 rounded-md rounded-pill">Add Product</a>
      <a href="allusers.php" class=" text-white text-decoration-none font-bold fs-4 fw-bold px-5 bg-black p-2 rounded-md rounded-pill">User</a>
      <a href="product/allproducts.php" class=" text-white text-decoration-none font-bold fs-4 fw-bold px-5 bg-black p-2 rounded-md rounded-pill">All Products</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>