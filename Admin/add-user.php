
    <?php include('common/header.php')?>
            <!-- Body section starts -->
            <section class="content">
                            <div class="wrapper">
                                <h1 class="heading">MANAGE USER</h1>
                                <br>
                            <!-- user add from -->
                            <form action="add-user.php" method="post">
                                <table class="table">
                                    <tr>
                                        <td class="text-right">UserName</td>
                                        <td><input type="text" name="user_name" id="user_name" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">FullName</td>
                                        <td><input type="text" name="full_name" id="full_name" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">Password</td>
                                        <td><input type="password" name="password" id="password" class="form-control"></td>
                                    </tr>

                                    <tr>
                                            <td><input type="submit" name="submit" id="submit" class="btn btn-primary"></td>
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
        if(isset($POST['submit'])){
            echo "Clicked";
        }
    }
    ?>