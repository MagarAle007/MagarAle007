<?php

//getting the connection
include('config/constant.php');
//taking the id
$id = $_GET['id'];
echo $id;
//finding the product inorder to delete photo
 //making sql to select value
 $sql = "SELECT * FROM products where id='$id'";

 //execute the query
 $exec = mysqli_query($conn,$sql);

 //count the number of rows
 $count = mysqli_num_rows($exec);
    
 if($count == 1){
     while($rows=mysqli_fetch_assoc($exec)){
         $current_image = $rows['image_name'];

          //remove the old image
        if(file_exists("../images/product/".$current_image)){
            @unlink("../images/product/".$current_image);
        }
     }
 }
//making the sql

$sql = "DELETE FROM PRODUCTS WHERE ID = '$id'";

//execute query
$exec = mysqli_query($conn,$sql);

//checking either true or false
if($exec == TRUE){
    $_SESSION['message'] = '<div class="success"> Product Deleted Succesfully </div>';
}else{
    $_SESSION['message'] = '<div class="error"> Something Went Wrong. Try Again </div>';
}
header('location:'.APP_URL.'Admin/manage-product.php');
?>