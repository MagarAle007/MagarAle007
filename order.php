<?php 
    include('layout/header.php');
?>
    <!-- Contact  Begins Here -->
    <section class="search">
        <div class="container">
            <h2 class="text-center text-white">Please fill the form to order the Land</h2>
            <form action="" class="form-horizontal">
                <fieldset>
                    <legend>Selected Land:</legend>
                    <div class="box-img">
                        <img src="images/cat3.jpg" alt="Raw land" 
                        class="img-responsive img-rounded">
                    </div>
                    <div class="box-desc">
                        <h4>Raw land</h4>
                        <p class="item-price">$10,001</p>
                        <p class="item-desc">Land with options..</p>
                        <!-- <a href="#" class="btn btn-primary">Order Now</a> -->
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Order Detail:</legend>
                    <label for="">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required placeholder="Eg. Kapil Sapkota">
    
                    <label for="">Email</label>
                    <input class="form-control" type="text" name="email" id="email" required placeholder="Eg. kapilsapkota1001@gmail.com">

                    <label for="">Address</label>
                    <input class="form-control" type="text" name="address" id="address" required placeholder="Eg. Banepa-3, Kavre">

                    <label for="">Quantity</label>
                    <input class="form-control" type="number" min="1" name="quantity" id="quantity" required placeholder="Eg.1" value="1">
    
                    <label for="">Feedback</label>
                    <textarea class="form-control" name="feedback" id="feedback" cols="30" required rows="10" placeholder="Enter your feedback.."></textarea>
    
                    <button class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Search Section Ends Here -->

    <!-- Social  Begins Here -->
    <section class="social text-center">
        <div class="container">
           <ul>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/fluency/48/000000/facebook-circled.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/color-glass/48/000000/twitter.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/youtube-play.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/linkedin-circled--v3.png"/>
                    </a>
                </li>
           </ul>
        </div>
    </section>
    <!-- Social Section Ends Here -->

    <?php
        include('layout/footer.php');

    ?>
</body>
</html>