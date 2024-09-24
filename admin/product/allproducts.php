<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div class="container">
        <h2 class="text-center my-4">Product List</h2>
        <table class="table table-hover border my-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'Config.php';
                $Record = mysqli_query($con, "SELECT * FROM Allproducts");
                while ($row = mysqli_fetch_array($Record)) {
                    echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['PName']."</td>
                        <td>".$row['PPrice']."</td>
                        <td>".$row['PCategory']."</td>
                        <td><img src='".$row['PImage']."' width='100px' height='100px'></td>
                        <td><a href='update.php?id=".$row['id']."'>Update</a></td>
                        <td><a href='delete.php?id=".$row['id']."'>Delete</a></td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
