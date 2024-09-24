<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .product-image {
            width: 100%;
            height: 200px; 
            object-fit: contain; 
        }
    </style>
    <?php 
    include 'header.php';
    ?>  
</head>
<body>
    <div class="container">
        <div class="col-md-12">
        <div class="row">

    <h1 class="text-center my-3">Cameras</h1>
    <?php
    include 'Config.php';
    $Record=mysqli_query($conn,"SELECT * FROM allproducts");
    while($row=mysqli_fetch_assoc($Record)){
        $check_page=$row['PCategory'];
        if($check_page==='Camera'){
        echo "
    <div class='col-md-6 col-lg-4 mt-4'>
          <form action='Insertcart.php' method='POST'>
        <div class='card m-auto' style='width: 18rem;'>
            <img src='../admin/product/$row[PImage]' class='card-img-top product-image' alt='...'>
            <div class='card-body'>
                <h5 class='card-title fw-bold '>$row[PName]</h5>
                <p class='card-text fw-bold'>RS : $row[PPrice]</p>
               <input type='hidden' name='PName' value='$row[PName]'>    
                <input type='hidden' name='PPrice' value='$row[PPrice]'>    
                <input type='number' name='Pquantity' class='form-control' value='' min='1' max='20' placeholder='Select quantity'/>
                <input type='submit' name='addCart' class='btn btn-primary text-white w-100 mt-2' value='Add to cart'/>
            </div>
        </div>
        </form>
    </div>";
}
      }
    ?>
    
    </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
