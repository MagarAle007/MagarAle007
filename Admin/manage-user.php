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
                                            // making the sql  to fetch the data from users table
                                            $sql = "SELECT * FROM 'users'";

                                            // execute the query
                                            $exec = mysqli_query($conn,$sql);

                                            // if there is something
                                            if($exec = TRUE){

                                                // count the numbers of rows
                                                $count = mysqli_num_rows($exec);
                                                if($count > 0){
                                                     $sn = 1;
                                                     while($rows = mysqli_fetch_assoc($exec)){
                                                        $id = $rows['id'];
                                                        $full_name = $rows['full_name'];
                                                        $user_name = $rows['user_name'];
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sn++;?></td>
                                                            <td><?php echo $full_name;?></td>
                                                            <td><?php echo $user_name;?></td>
                                                            <td>
                                                                <a class="btn btn-primary" href="<?php   echo APP_URL;?>Admin/edit-user.php?id=<?php echo $id; ?>">
                                                                  Edit User
                                                                 </a>
                                                                 <a class="btn btn-danger"  href="<?php   echo APP_URL;?>Admin/delete-user.php?id=<?php echo $id; ?>">
                                                                  delete user
                                                                  </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                      }
                                                }
                                            }else{
                                                echo '<tr><td clospan="4">No rows to display</td></tr>'
                                            }
                                       ?>
                                      
                                    </tbody>
                                </table>
                             <!-- Users table ends -->
                        </div>
                    </section>
                <!-- Body section ends -->  
<?php include('common/footer.php')?>