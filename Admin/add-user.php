         <?php include('common/header.php')?>
                    <!-- Body section starts -->
                    <section class="content">
                                    <div class="wrapper">
                                        <h1 class="heading">ADD USER</h1>
                                        <br><br>

                                  <?php include('config/session.php')?>
                                    <!-- user add from -->
                                    <form action="add-user.php" method="post">
                                        <table class="table">
                                            <tr>
                                                <td class="text-right">UserName</td>
                                                <td><input type="text" placeholder="Enter  your username..." name="user_name" id="user_name" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-right">FullName</td>
                                                <td><input type="text" name="full_name"  placeholder="Enter your Full Name...." id="full_name" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-right">Password</td>
                                                <td><input type="password" name="password"   placeholder="Enter your password...."id="password" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="text-center"><input type="submit" name="submit" id="submit" class="btn btn-primary"></td>
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
                    $password = md5($_POST['password']);

                    //making sql
                    $sql = "INSERT INTO users SET
                        full_name = '$full_name',
                        user_name  = '$user_name',
                        password = '$password'
                    ";

                   
                    if($conn){
                        
                        $execute  = mysqli_query($conn,$sql) or die(mysqli_error($conn));    
                        //Create DAtabase
                        if($execute = TRUE){
                            $_SESSION['message'] = "User added succcessfully";
                            header('location:'.APP_URL.'Admin/manage-user.php');
                        }else{
                            $_SESSION['message'] = "Could not add User Instantly .Try again";
                            header('location:'.APP_URL.'Admin/add-user.php');
                        }

                     }else{
                         die("Connection failed".mysqli_connect_error());
                   }

                }
            }
            ?>