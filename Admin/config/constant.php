<?php 
ob_start();
    //Define frequent constant 
    define('APP_URL', 'http://localhost/PROJECT/');
    
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DATABASE','real_state');
    
    
    
// Database connection
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DATABASE) or die(mysqli_error($conn));
?>