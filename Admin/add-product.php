<?php include('common/header.php')?>
                        <!-- Body section starts -->
                        <section class="content">
                                        <div class="wrapper">
                                            <h1 class="heading">ADD PRODUCT</h1>
                                            <br><br>

                                    <?php include('config/session.php')?>
                                        <!-- user add from -->
                                        <form  enctype="multipart/form-data" action="" method="post">
                                            <table class="table">
                                                <tr>
                                                    <td class="text-right">Title</td>
                                                    <td><input type="text" placeholder="Enter your title..." name="title" id="user_name" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">price</td>
                                                    <td><input type="number" placeholder="Enter your Price..." name="price" id="price" class="form-control"></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Category</td>
                                                   
                                                    <select name="category_id" id="category">   
                                                    <?php  
                                                        //creating the sql
                                                        $sql = "SELECT * FROM categories";  

                                                        //execute the query
                                                        $execute =  mysqli_query($conn,sql);

                                                        //if true
                                                        if($execute == TRUE){
                                                            //count the number 
                                                            $count =   mysqli_num_rows($execute);

                                                            if($count>0){
                                                                    while($rows = mysqli_fetch_assoc($execute)){
                                                                        $category_name = $rows['title'];
                                                                        $category_id = $rows['id'];
                                                                        ?>
                                                                        <?php
                                                                            <option value ='<?php echo $category_id; ?> '> <?php echo $category_name; ?> 
                                                                            </option> 
                                                                            
                                                                        <option value = "<?php echo?>"></option>
                                                                        ?>
                                                                    }
                                                            }else{
                                                                echo "<option>No Category</option>";
                                                            }
                                                        }else{
                                                            echo "<option>No Category</option>";
                                                        }
                                                    ?>  
                                                    </select>
                                                    <td><input type="number" placeholder="Enter your Price..." name="price" id="price" class="form-control"></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Description</td>
                                                    <td><textarea  rows="5" placeholder="Enter Description..." name="description" id="price" class="form-control"></textarea></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Image</td>
                                                    <td><input type="file" accept="image/*" name="image" id="image" class="form-control"></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Featured</td>
                                                    <td>
                                                        <input type="radio" name="featured" id="" value="Yes">Active
                                                        <input type="radio" name="featured" id="" value="No">InActive
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="text-right">Status</td>
                                                    <td>
                                                        <input type="radio" name="status" id="" value="Yes">Yes
                                                        <input type="radio" name="status" id="" value="No">No
                                                    </td>
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
                        $title = $_POST['title'];
                        $price = $_POST['price'];
                        $description = $_POST['description'];



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

                        //upload image
                       

                        //check if request have file
                        if($_FILES['image']['name']){
                            
                            //taking the extension
                            $text = end(explode('.',$_FILES['image']['name']));

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
                            }

                        }else{
                            $image_name ="";
                        }

                        //making sql
                        $sql = "INSERT INTO products SET
                            title = '$title',
                            price = '$price',
                            description = '$description',
                            image_name = '$image_name',
                            featured  = '$featured',
                            status = '$status'
                        ";

                        
                        if($conn){
                            
                            $execute  = mysqli_query($conn,$sql) or die(mysqli_error($conn));    
                            //Create DAtabase
                            if($execute = TRUE){
                                $_SESSION['message'] = "Product added succcessfully";
                                header('location:'.APP_URL.'Admin/manage-product    .php');
                            }else{
                                $_SESSION['message'] = "Could not add category Instantly .Try again";
                                header('location:'.APP_URL.'Admin/add-category.php');
                            }

                        }else{
                            die("Connection failed".mysqli_connect_error());
                    }

                    }
                }
                ?>