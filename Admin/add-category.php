            <?php include('common/header.php')?>
                        <!-- Body section starts -->
                        <section class="content">
                                        <div class="wrapper">
                                            <h1 class="heading">ADD CATEGORIES</h1>
                                            <br><br>

                                    <?php include('config/session.php')?>
                                        <!-- user add from -->
                                        <form  enctype="multipart/form-data" action="" method="post">
                                            <table class="table">
                                                <tr>
                                                    <td class="text-right">Title</td>
                                                    <td><input type="text" placeholder="Enter your title..." name="title" id="  " class="form-control"></td>
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
                            
                            $image = $_FILES['image']['name'];
                            // image upload
                            $uploaded_path = $_FILES['image']['tmp_name'];
                            $destination_path = "../images/category/".$image;
                            
                            $upload = move_uploaded_file($uploaded_path,$destination_path);

                            if($upload == false){
                                $_SESSION['message'] = '<div class="error">Could not upload the image.Try again</div>';
                                die();
                            }else{
                                $image_name = $_FILES['image']['name'];
                            }

                        }else{
                            $image_name = $image;
                        }

                        //making sql
                        $sql = "INSERT INTO categories SET
                            title = '$title',
                            image_name = '$image_name',
                            featured  = '$featured',
                            status = '$status'
                        ";

                        
                        if($conn){
                            
                            $execute  = mysqli_query($conn,$sql) or die(mysqli_error($conn));    
                            //Create DAtabase
                            if($execute = TRUE){
                                $_SESSION['message'] = "Category added succcessfully";
                                header('location:'.APP_URL.'Admin/manage-category.php');
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