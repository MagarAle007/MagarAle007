<?php include('common/header.php'); ?>
        <?php include('config/session.php'); ?>
                                <!-- Body section starts -->
                                <section class="content">
                                                <div class="wrapper">
                                                    <h1 class="heading">EDIT Product</h1>
                                                    <br><br>
                                            <?php
                                            //getting id
                                                $id = $_GET['id'];

                                                //making sql to select  value
                                                $sql = "SELECT * FROM products where id='$id'";

                                                //execute the query
                                                $exec = mysqli_query($conn,$sql);

                                                //count the number of rows
                                                $count = mysqli_num_rows($exec);

                                                if($count == 1){
                                                    while($rows= mysqli_fetch_assoc($exec)){
                                                        $id = $rows['id'];
                                                        $title = $rows['title'];
                                                        $price = $rows['price'];
                                                        $description = $rows['description'];
                                                        $old_product_id = $rows['product_id'];
                                                        $current_image = $rows['image_name'];
                                                        $featured = $rows['featured'];
                                                        $status = $rows['status'];
                                                    }
                                                }
                                            ?>
                                                <!-- user add from -->
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                    <table class="table">
                                                <tr>
                                                    <td class="text-right">Title</td>
                                                    <td><input type="text" value="<?php echo "$title";?>" placeholder="Enter your title..." name="title" id=" " class="form-control"></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Price</td>   
                                                    <td><input type="number"   value="<?php echo "$title";?>" placeholder="Enter your Price..." name="price" id="  " class="form-control"></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Product</td>
                                                   <td>
                                                   <select name="product_id" id="product">
                                                        <?php  
                                                            //creating sql 
                                                            $sql = "SELECT * FROM products";

                                                            //exxecute the query
                                                            $execute = mysqli_query($conn,$sql);

                                                            //if true
                                                            if($execute == TRUE){
                                                                $count = mysqli_num_rows($execute);

                                                                if($count>0){
                                                                       while($rows = mysqli_fetch_assoc($execute)){
                                                                        $product_name = $rows['title'];
                                                                        $product_id = $rows['id'];
                                                                        ?>
                                                                        <option  <?php if($old_product_id == $product_id){ echo "selected";}?> value=" <?php  echo "$product_id";?>"> product_name </option>
                                                                        <?php
                                                                       }
                                                                }else{
                                                                    echo "<option>Product</option>";
                                                                }

                                                            }else{
                                                                    echo "<option>product</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                   </td>
                                                    <option value=""></option>
                                                    <?php  
                                                        //creating sql 
                                                        $sql = "SELECT * FROM products";

                                                        //exxecute the query
                                                        $execute = mysqli_query($conn,$sql);

                                                        //if true
                                                        if($execute == TRUE){
                                                            $count = mysqli_num_rows($execute);

                                                            if($count>0){
                                                                    echo "<option>product</option>";
                                                            }else{
                                                                echo "<option>product</option>";

                                                            }
                                                        }
                                                    ?>
                                                        
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Description</td>
                                                    <td><textarea  rows="5" placeholder="Enter Description..." name="description" class="form-control"> <?php echo $description; ?></textarea></td>
                                                </tr>
                                                
                                                <tr>
                                                      <td class="text-right">Current Image</td>
                                                            <?php
                                                                  if($current_image != ""){
                                                              ?>
                                                                   <td>  <img  width="100" height="100" src="../images/product/<?php echo $current_image;?>" alt="<?php echo $title;?>"></td>
                                                              <?php
                                                              }else{
                                                                    echo '<td>No image found</td>';
                                                              }
                                                             ?>
                                                 </tr>

                                                <tr>
                                                    <td class="text-right">Image</td>
                                                    <td><input type="file" accept="image/*" name="image" id="image" class="form-control"></td>
                                                </tr>

                                                <tr>
                                                            <td class="text-right">Featured</td>
                                                            <td>
                                                                <input type="radio" <?php if($featured == "Yes")echo "checked"; ?> name="featured" id="" value="Yes">Active
                                                                <input type="radio"  <?php if($featured == "No")echo "checked"; ?> name="featured" id="" value="No">InActive
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-right">Status</td>
                                                            <td>
                                                                <input type="radio"  <?php if($status== "Yes")echo "checked"; ?>name="status" id="" value="Yes">Yes
                                                                <input type="radio"  <?php if($status == "No")echo "checked"; ?> name="status" id="" value="No">No
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2" class="text-center">
                                                                <input type="hidden" name="id" value="<?php  echo $id;?>">
                                                                <input type="hidden" name="current_image" value="<?php  echo $current_image;?>">
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
                            
                                $title = $_POST['title'];
                                // to populate the default value of featured
                                    if(isset($_POST['featured'])){
                                        // request value
                                        $featured = $_POST['featured'];

                                    }else{
                                        // default value
                                        $featured = "No";
                                    }

                                    // to populate the default value of status
                                    if(isset($_POST['status'])){
                                        // request value
                                        $status = $_POST['status'];

                                    }else{
                                        // default value
                                        $status = "No";
                                    }
                                    $id = $_POST['id']; 
                                    $current_image = $_POST['current_image'];        
                               
                                    //upload file or image 
                                     //check if request have file
                                     $file = $_FILES['image']['name'];
                                    if($_FILES['image']['name']){
                                    
                                        //taking the extension
                                        $text = end(explode('.',$file));

                                                //giving the random name 
                                          $image = 'product_'.rand(1111,9999).'.'.$text;
                                        // image upload
                                        $uploaded_path = $_FILES['image']['tmp_name'];
                                        $destination_path = "../images/product/".$image;
                                        
                                        $upload = move_uploaded_file($uploaded_path,$destination_path);

                                        if($upload == false){
                                            $_SESSION['message'] = '<div class="error">Could not upload the image.Try again</div>';
                                            die();
                                        }else{
                                            $image_name = $image;
                                            
                                            //remove the old image
                                            if(file_exists("../images/product/".$current_image)){
                                                @unlink("../images/product/".$current_image);
                                        }

                                    }}else{
                                        $image_name = $current_image;
                                    }
                                    //making sql 
                                $sql = "UPDATE products SET 
                                title='$title',
                                featured='$featured',
                                status = '$status',
                                image_name = '$image_name',
                                WHERE id='$id'";

                                //Check the connection 
                                    if($conn){
                                $execute = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                    //create database
                                        if($execute == TRUE){
                                            $_SESSION['message'] = "<div class='success'>product updated Successfully</div>";
                                            header('location:'.APP_URL.'Admin/manage-product.php');
                                        }else{
                                            $_SESSION['message'] = '<div class="error">Could not Edit product Instantly. Try Again</div>';
                                            header("location:".APP_URL."Admin/edit-product.php");
                                        }
                                        
                                }else{
                                    die("Connection Failed!".mysqli_connect_error());
                                }
                                }
                                }
                        ?>