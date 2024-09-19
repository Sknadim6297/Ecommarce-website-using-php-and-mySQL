<?php

session_start();
// session_destroy();  

$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quantity = $_POST['Pquantity'];

if (isset($_POST['addCart'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $check_product = array_column($_SESSION['cart'], 'product_name');


    if (in_array($_POST['PName'], $check_product)) {
        echo "<script>
        alert('Product is already added in the cart');
        window.location.href='index.php';
        </script>";
    } else {

        $_SESSION['cart'][] = array(
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_quantity' => $product_quantity
        );
        header('location:viewCart.php');
    }
}
  //remove product from cart
  if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['product_name'] === $_POST['item']){
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); 
          header('location:viewCart.php');
      }
    }
  }
//update product quantity
  if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['product_name'] === $_POST['item']){
        $_SESSION['cart'][$key] =array(
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_quantity' => $product_quantity
        );
        header('location:viewCart.php');
      }
    }
  }
?>
