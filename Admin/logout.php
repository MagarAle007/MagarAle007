<?php
    include('config/constant.php');
    //session destrpy
    session_destroy();
    // redirect to login
    header('location:'.APP_URL.'Admin/login.php');
?>