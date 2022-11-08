    <?php include('common/header.php');?>
                                <!-- Body section starts -->
                                <section class="content">
                                                <div class="wrapper">
                                                    <h1 class="heading">Change Password</h1>
                                                    <br><br>

                                            <?php include('config/session.php');?>
                                            <?php
                                            //getting id
                                                $id = $_GET['id'];

                                                //making sql to select  value
                                                $sql = "SELECT * FROM users where id='$id'";

                                                //execute the query
                                                $exec = mysqli_query($conn,$sql);

                                                //count the number of rows
                                                $count = mysqli_num_rows($exec);

                                                if($count == 1){
                                                    while($rows= mysqli_fetch_assoc($exec)){
                                                        $id = $rows['id'];
                                                    }
                                                }
                                            ?>
                                                <!-- user add from -->
                                                <form action="" method="post">
                                                    <table class="table">
                                                        <tr>
                                                            <td class="text-right">Old Password</td>
                                                            <td><input type="text" placeholder="Enter Your Old Password..." name="old_password" id="old_passwprd" class="form-control"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-right">New Password</td>
                                                            <td><input type="text"  name="new_password"  placeholder="Enter Your New Password...." id="new_password" class="form-control"></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-right">Confirm Password</td>
                                                            <td><input type="text"  name="confirm_password"  placeholder="Confirm Your New Password..." id="confirm_password" class="form-control"></td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2" class="text-center">
                                                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                                                <input type="submit" name="submit" id="submit" class="btn btn-primary">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                                <!-- user add from end -->
                                                </div>
                                            </section>
                                        <!-- Body section ends -->  
                        <?php include('common/footer.php')?>
                        <?php 
                            //form submit code
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                            if(isset($_POST['submit'])){
                                
                                // Getting the data from the web form in respective variable
                                $old_password = md5($_POST['old_password']);
                                $new_password = md5($_POST['new_password']);
                                $confirm_password = md5($_POST['confirm_password']);
                                $id = $_POST['id'];

                                //checking the user exit
                                $checksql = "SELECT * FROM USERS WHERE ID =$id AND password= 'old_password'";

                                //execute the checking sql
                                $exec = mysqli_query($conn,$checksql);

                                //if execution is successful
                                if($exec == TRUE){
                                    //  count the numbers of rows
                                    $count = mysqli_num_rows($exec);
                                    if($count == 1){
                                        while($rows = mysqli_fetch_assoc($exec)){
                                            //
                                                if($new_password == $confirm_password){
                                                        //creating updated sql
                                                        $sql = "UPDATE users SET
                                                        password='$new_password',
                                                        WHERE id ='$id' AND password='$old_password'";
                                                        
                                                        //execute the query
                                                        $execute  =  mysqli_query($conn,$sql);

                                                        //check if updated
                                                        if($execute == TRUE){
                                                            //if success 
                                                            $_SESSION['message']  ='<div class="success">Password updated succcessfully</div>';
                                                            header('location:'.APP_URL.'Admin/manage-user.php');
                                                        }else{
                                                            //if error
                                                            $_SESSION['message']  ='<div class="error">Something went wrong ! Please Try again later</div>';
                                                            header('location:'.APP_URL.'Admin/update-password.php');
                                                        }
                                                        }else{
                                                    $_SESSION['message'] = '<div class="error">Please confrim your password</div>';
                                                    header('location:'.APP_URL.'Admin/update-password.php');
                                                }
                                        }
                                    }
                                }else{
                                    $_SESSION['message'] = '<div class="error">Could find the user</div>';
                                    header('location:'.APP_URL.'Admin/update-password.php');
                                }
                      
                                
                            }
                        }
                        ?>