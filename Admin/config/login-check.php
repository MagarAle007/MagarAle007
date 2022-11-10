<?php
    if(isset($_SESSION['user'])){
        $_SESSION['messsage'] = '<div class="error">Please log in to access admin</div>';
        header('location:'.APP_URL.'Admin/login.php');
    }
?>