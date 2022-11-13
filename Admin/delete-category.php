<?php
        //making the connection
        include('config/constant.php');
        // taking the id 
        $id = $_GET['id'];

        //finding the category in order to delete photo
         //making sql to select  value
         $sql = "SELECT * FROM categories where id='$id'";

         //execute the query
         $exec = mysqli_query($conn,$sql);

         //count the number of rows
         $count = mysqli_num_rows($exec);

         if($count == 1){
             while($rows= mysqli_fetch_assoc($exec)){
                 $current_image = $rows['image_name'];

                  //remove the old image
            if(file_exists("../images/category/".$current_image)){
                @unlink("../images/category/".$current_image);
        }
             }
         

        // making th sql

        $sql = "DELETE FROM CATEGORIES WHERE ID ='$id'";
        
        // execute query 
        $exec = mysqli_query($conn,$sql);


        //checking if execute is true or false  
        if($exec == TRUE){
            $_SESSION['messsage'] = '<div classs ="success">Category deleted successfully.</div>';
        
        }else{
            $_SESSION['messsage'] = '<div classs ="error">Something went wrong. Try Again</div>';
        }
    }
        header('location:'.APP_URL.'Admin/manage-category.php');
?>