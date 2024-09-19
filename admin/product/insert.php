<?php
if(isset($_POST['submit'])){
   include 'Config.php';
    $Product_name = $_POST['Pname'];
    $Product_price = $_POST['Pprice'];
    $Product_category = $_POST['Pages'];
    $Product_image = $_FILES['Pimage'];


    $image_name=$_FILES['Pimage']['name'];
    $image_loc=$_FILES['Pimage']['tmp_name'];

    $img_des="uploadimage/".$image_name;
      move_uploaded_file($image_loc,"UploadImage/".$image_name);
    

      mysqli_query($con,"INSERT INTO `Allproducts` (`PName`,`PPrice`,`PImage`,`PCategory`) VALUES ('$Product_name','$Product_price','$img_des','$Product_category')");
      header('location:index.php');
}
?>
