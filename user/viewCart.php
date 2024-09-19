<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h1 class=" ">My Cart</h1>
            </div>
        </div>
        
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-12 col-md-6 col-lg-9">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>Index No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                       
                        <?php
                        $index=0;
                        $grand_total = 0;
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $product_price = !empty($value['product_price']) ? (float)$value['product_price'] : 0;
                                $product_quantity = !empty($value['product_quantity']) ? (int)$value['product_quantity'] : 1; // Default to 1 if not set or zero
                                $total = $product_price * $product_quantity;
                                $grand_total += $total;
                                $index++;

                                echo "
                                <form action='Insertcart.php' method='POST'>
                                <tr>
                                    <td>$index</td>
                                    <td><input type='hidden' name='PName'  value='{$value['product_name']}'>{$value['product_name']}</td>
                                    <td><input type='hidden' name='PPrice'  value='$product_price'>$product_price</td>
                                    
                                    <td class='quantity-cell'>
                                        <span class='quantity-text'>$product_quantity</span>
                                        <input type='number' class='quantity-input form-control d-none' name='Pquantity' value='$product_quantity' min='1'>
                                    </td>
                                    
                                    <td>$$total</td>
                                    <td><button class='btn btn-warning btn-sm' name='update'>Update</button></td>
                                    <td><button class='btn btn-danger btn-sm' name='remove'>Delete</button></td>
                                    <td><input type='hidden' name='item' value='{$value['product_name']}'></td>
                                </tr>
                                 </form>
                                ";
                            }
                            echo "
                            <tr>
                                <td colspan='4' class='text-end'><strong>Grand Total:</strong></td>
                                <td colspan='3'><strong>$$grand_total</strong></td>
                            </tr>";
                        } else {
                            echo "<tr><td colspan='7'>No products in the cart</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    

    <script>
        // Add event listeners to the quantity cells
        document.querySelectorAll('.quantity-cell').forEach(cell => {
            const quantityText = cell.querySelector('.quantity-text');
            const quantityInput = cell.querySelector('.quantity-input');

            // On click, hide the text and show the input field
            quantityText.addEventListener('click', function() {
                quantityText.classList.add('d-none');
                quantityInput.classList.remove('d-none');
                quantityInput.focus();
            });

            // When input loses focus, show text and hide input
            quantityInput.addEventListener('blur', function() {
                const newValue = quantityInput.value;

                // Update text with new value
                quantityText.textContent = newValue;

                quantityInput.classList.add('d-none');
                quantityText.classList.remove('d-none');
            });
        });
    </script>

</body>
</html>
