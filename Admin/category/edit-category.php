<?php include('common/header.php'); ?>
       <?php include('config/session.php'); ?>
                            <!-- Body section starts -->
                            <section class="content">
                                            <div class="wrapper">
                                                <h1 class="heading">EDIT USER</h1>
                                                <br><br>
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
                                                    $full_name = $rows['full_name'];
                                                    $user_name = $rows['user_name'];
                                                }
                                            }
                                        ?>
                                            <!-- user add from -->
                                            <form action="" method="post">
                                                <table class="table">
                                                    <tr>
                                                        <td class="text-right">UserName</td>
                                                        <td><input type="text" value="<?php echo $user_name?>" placeholder="Enter user name" name="user_name" id="user_name" class="form-control"></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-right">FullName</td>
                                                        <td><input type="text" value="<?php echo $full_name?>" name="full_name"  placeholder="Enter Full Name" id="full_name" class="form-control"></td>
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
                            $full_name = $_POST['full_name'];
                            $user_name = $_POST['user_name'];
                            $id = $_POST['id'];
                                //making sql 
                            $sql = "UPDATE users SET 
                            full_name='$full_name',
                            user_name='$user_name'
                            WHERE id='$id'";
                            

                            //Check the connection 
                            if($conn){
                                $execute = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                //create database
                                    if($execute = TRUE){
                                        $_SESSION['message'] = "<div class='success'>User updated Successfully</div>";
                                        header('location:'.APP_URL.'Admin/manage-user.php');
                                    }else{
                                        var_dump('sfa');
                                        die();
                                        $_SESSION['message'] = '<div class="error">Could not Edit User Instantly. Try Again</div>';
                                        header("location:".APP_URL."Admin/edit-user.php");
                                    }

                            }else{
                                 die("Connection Failed!".mysqli_connect_error());
                            }
                            }
                            }
                    ?>