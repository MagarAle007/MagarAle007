<?php include('common/header.php')?>
         <!-- Body section starts -->
         <section class="content">
                        <div class="wrapper">
                            <h1 class="heading">MANAGE USER</h1>
                            <br><br>

                            <?php include('config/session.php')?>

                            <a class="btn btn-secondary user-addd"  href="add-user.php">Add user</a>
                            <br>
                            <!-- Users table -->
                                <table class="table">
                                    <thead>
                                       <tr>
                                       <th>S.N</th>
                                        <th>FullName</th>
                                        <th>UserName</th>
                                        <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // making the sql to paste the data from users table
                                            $sql = "SELECT  FROM 'users'";

                                        // execute the query
                                        $exec = mysqli_query($conn,$sql);

                                        // if there is something
                                        if($exec == TRUE){

                                            // cont the number of rows
                                            $count =  mysqli_num_rows($exec);

                                            if($count>0){
                                               while( $rows = mysqli_fetch_assoc($exec)){
                                                $id = $rows['id'];
                                                $full_name = $rows['$full_name'];
                                                $user_name = $rows['$user_name'];
                                                ?>
                                                <tr>
                                                        <td></td>
                                                </tr>
                                                <?php
                                                var_dump($user_name);
                                               }
                                            //    
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td>Arjun</td>
                                            <td>baba</td>
                                            <td>sads%(9</td>
                                            <td>
                                                <a class="btn btn-primary" href="#">
                                                    Edit User
                                                </a>
                                                <a class="btn btn-danger"  href="<?php   echo APP_URL;?>admin/delete-user.php">
                                                    delete user
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                             <!-- Users table ends -->
                        </div>
                    </section>
                <!-- Body section ends -->  
<?php include('common/footer.php')?>