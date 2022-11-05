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
                                        <tr>
                                            <td>1</td>
                                            <td>Arjun</td>
                                            <td>baba</td>
                                            <td>sads%(9</td>
                                            <td>
                                                <a class="btn btn-primary" href="#">
                                                    Edit User
                                                </a>
                                                <a class="btn btn-danger"  href="#">
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