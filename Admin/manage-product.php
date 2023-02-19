<?php include('common/header.php');?>
                <!-- Body section starts -->
                <section class="content">
                                <div class="wrapper">
                                    <h1 class="heading">MANAGE PRODUCT</h1>
                                    <br><br>

                                    <?php include('config/session.php')?>

                                    <a class="btn btn-secondary user-add"  href="add-product.php">Add Product</a>
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
                                                    // making the sql  to fetch the data from products table
                                                    $sql = "SELECT * FROM products";

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
                                                                $price = $rows['price'];
                                                                $current_image = $rows['image_name'];
                                                                $featured = $rows['featured'];    
                                                                $status = $rows['status'];
                                                                ?>

                                                                <tr>
                                                                    <td><?php echo $sn++;?></td>
                                                                    <td><?php echo $title;?></td>
                                                                    <td><?php echo $price;?></td>
                                                                    <?php
                                                                        if($current_image != ""){
                                                                     ?>
                                                                              <td>  <img  width="100" height="100" src="../images/product/<?php echo $current_image;?>" alt="<?php echo $title;?>"></td>
                                                                            <?php
                                                                        }else{
                                                                            echo '<td>No image found</td>';
                                                                        }
                                                                        
                                                                    ?>
                                                                   
                                                                    <td><?php echo $featured;?></td>
                                                                    <td><?php echo $status;?></td>
                                                                    
                                                                    <td>
                                                                            <a class="btn btn-primary" href="<?php   echo APP_URL;?>Admin/edit-product.php?id=<?php echo $id; ?>">
                                                                            Edit product
                                                                            </a>
                                                                        <a class="btn btn-danger"  href="<?php   echo APP_URL;?>Admin/delete-product.php?id=<?php echo $id; ?>">
                                                                        delete product
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                    }else{
                                                        echo '<tr><td clospan="7" class="text-center">No rows to display</td></tr>';
                                                    }
                                            ?>
                                            
                                            </tbody>
                                        </table>
                                    <!-- Users table ends -->
                                </div>
                            </section>
                        <!-- Body section ends -->  
                        <?php include('common/footer.php')?>