<?php
    // taking the id 
    $id = $_GET['id'];

    // making th sql

    $sql = "DELETE FROM USERS HERE ID ='$id'";
    
    // execute query 
    $exec = mysqli_query($conn_$sql);

    // checking either true or false
    if($exec == TRUE){
        $_SESSION['messsage'] = '<div classs = "success">Users deleted successfully.</div>';
        
    }else{
        
    }
?>