<?php
    include('config/constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login- Real_state</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br>
            <?php
                include('config/session.php');
            ?>
            <br>
            <!-- from start -->
            <form action="" method="post">
                <label for="">UserName</label>
                <input type="text" name="user_name" class="form-control-login" placeholder="Enter your username...">
                <br><br>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your password...">
                <br><br>
                <input type="submit" name="submit" value="Login" class="btn btn-primary">
            </form>
            <br><br>
            <!-- from close -->
            <p class="text-center"><a href="#">Designed By S.A.M</a></p>
        </div>
        <?php
            //form submit code
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['submit'])){
                    
                    // Getting the data from the web form in respective variable
                   
                    $user_name = $_POST['user_name'];
                    $password = md5($_POST['password']);
                   
                    //making sql
                    $sql = "SELECT * FROM users where user_name='$user_name' AND password='$password'";

                    //execute the sql
                    $res = mysqli_query($conn,$sql);

                    //if query is true
                    if($res == TRUE){
                        //if true count the no of rows
                        $count = mysqli_num_rows($res);

                        if($count == 1){
                            $_SESSION['message'] = '<div classs="success">Log in successful</div>';
                            $_SESSION['user'] = $user_name;
                            header('location:'.APP_URL.'Admin/index.php');
                        }else{
                            $_SESSION['message'] = '<div classs="error">Your credentials do not match our record.</div>';
                            header('location:'.APP_URL.'Admin/login.php');
                        }
                    }else{
                        $_SESSION['message'] = '<div classs="error">Something mistake in your query!</div>';
                        header('location:'.APP_URL.'Admin/login.php');
                    }
            }
        }
        ?>
</body>
</html>