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
  <body>
    <div class="container ">
        <div class="row">
    <div class="col-md-6 m-auto mt-5">
    
    
    <form action="insert.php" method="POST" enctype="multipart/form-data">

    
  <div class="mb-3">
<p class="text-center fw-bold fs-3">Fill your product details</p>
</div>
<div class="mb-3 mt-5">
  <label for="formGroupExampleInput2" class="form-label">Product name:</label>
  <input type="text" class="form-control" name="Pname" placeholder="Enter the product name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Product price:</label>
  <input type="text" class="form-control" name="Pprice" placeholder="Product price">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label" >Add product Image</label>
  <input type="file" class="form-control" name="Pimage">
</div>
<div class="mb-3">
  <label class="form-label">Select page category</label>
  <select class="form-select" aria-label="Default select example" name="Pages">
  <option value="Select menu">Select menu</option>
  <option value="Laptop">Laptop</option>
  <option value="Mobile">Mobile</option>
  <option value="Bag">Bag</option>
  <option value="Watch">watch</option>
  <option value="Airpod">airpod</option>
  <option value="Earphone">earphone</option>
  <option value="Speaker">speaker</option>
  <option value="Trimmer">trimmer</option>
  <option value="Camera">camera</option>
</select>
</div>
<button name="submit" class="form-control bg-black fs-4 fw-bold my-3 text-white">Upload</button>
</form>
<div></div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>