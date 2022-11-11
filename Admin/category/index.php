<?php include('../common/header.php');?>
         <!-- Body section starts -->
         <section class="content">
                        <div class="wrapper">
                            <h1 class="heading">MANAGE CATEGORY     </h1>
                            <br><br>

                            <?php include('.../config/session.php')?>

                            <a class="btn btn-secondary user-add"  href="add-category.php">Add Category</a>
                            <br>
                            <!-- Users table -->
                                <table class="table">
                                    <thead>
                                       <tr>
                                       <th>S.N</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Featured</th>
                                        <th>Status</th>
                                        <th>Active</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            // making the sql  to fetch the data from categories table
                                            $sql = "SELECT * FROM categories";

                                            // execute the query
                                            $exec = mysqli_query($conn,$sql);

                                            // if there is something
                                            if($exec == TRUE){

                                                // count the numbers of rows
                                                $count = mysqli_num_rows($exec);
                                                if($count > 0){
                                                     $sn = 1;
                                                     while($rows = mysqli_fetch_assoc($exec)){
                                                        $id = $rows['id'];
                                                        $title = $rows['title'];
                                                        $current_image = $rows['current-image'];
                                                        $featured = $rows['featured'];    
                                                        $status = $rows['status'];
                                                        ?>

                                                        <tr>
                                                            <td><?php echo $sn++;?></td>
                                                            <td><?php echo $full_name;?></td>
                                                            <td><?php echo $user_name;?></td>
                                                            <td>
                                                                    <a class="btn btn-primary" href="<?php   echo APP_URL;?>Admin/category/edit-category.php?id=<?php echo $id; ?>">
                                                                    Edit Category
                                                                    </a>
                                                                 <a class="btn btn-danger"  href="<?php   echo APP_URL;?>Admin/category/delete-category.php?id=<?php echo $id; ?>">
                                                                  delete Category
                                                                  </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                      }
                                                }
                                            }else{
                                                echo '<tr><td clospan="6">No rows to display</td></tr>';
                                            }
                                       ?>
                                      
                                    </tbody>
                                </table>
                             <!-- Users table ends -->
                        </div>
                    </section>
                <!-- Body section ends -->  
                <?php include('../common/footer.php')?>