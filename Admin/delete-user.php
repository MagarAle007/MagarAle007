    <?php
        // taking the id 
        $id = $_GET['id'];

        // making th sql

        $sql = "DELETE FROM USERS HERE ID ='$id'";
        
        // execute query 
        $exec = mysqli_query($conn,$sql);

        // checking either true or false
        if($exec == TRUE){
            $_SESSION['messsage'] = '<div classs ="success">Users deleted successfully.</div>';
        
        }else{
            $_SESSION['messsage'] = '<div classs ="success">Something went wrong. Try Again</div>';
        }
        header('location:'.APP_URL.'Admin/manage-user.php');
    ?>