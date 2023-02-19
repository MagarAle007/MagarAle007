<?php 
    include('layout/header.php');
?>

            <!--search Section Begins Here -->
        <section class="search text-center">
            <div class="container">
                <h3 class="text-white home-contact">Home/Contact</h3>
            </div>
        </section>
        <!--search Section Begins Here -->

            <!-- contact form start here -->
                <section class="contact">
                    <div class="container">
                        <h2 class="text-center contact-heading">Send us messege</h2>
                    <form action="" class="form-horizontal">
                        <label for="" >Name</label>
                        <input  class="form-control" type="text" name="name" id="name" placeholder="Enter Your name...">
                        <label for="" >Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Enter Your email...">
                        <label for="">Message</label>
                        <textarea type="text"   class="form-control" name="meddage" id="message"  cols="30" rows="10" placeholder="Enter Your message..."></textarea>
                <button class="btn btn-primary">Submmit</button>
                    </form>

                    <div class="clearfix"></div>
                    </div>
                
                </section>
            <!-- contact form end here -->

            <!--Social Begins Here-->
            <section class="social text-center">
                <div class="container">
                    <h1>Connect Us</h1>
                    <ul>
                        <li><a href="#" target=" _blank"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"></a></li>
                        <li><a href="#" target=" _blank"><img src="https://img.icons8.com/color/48/000000/youtube--v3.png"/></a></li>
                        <li><a href="#" target=" _blank"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/></a></li>
                        <li><a href="#" target=" _blank"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </section>
            <!--Social Ends Here-->

            <?php
        include('layout/footer.php');

       ?>

        </body>

        </html>