<?php 
    include('layout/header.php');
?>
<body>
    <!--search Section Begins Here -->
    <section class="search text-center">
        <div class="container">
            <form>
                <input type="search" name="search" placeholder="Search Here...." id="search">
              <a href="#">  <input type="button" value="search" class="btn btn-primary"></a>
            </form>
        </div>
    </section>
    <!--search Section Begins Here -->

    <!-- catagories Section Begins Here -->
    <section class="categories text-center">
        <div class="container">
            <h2 class="text-center">categories</h2>

            <div class="card float-container">
                <a href="categories.html"><img src="images/cat1.jpg" alt="House" class="img-responsive img-rounded"></a>
                <h4 class="float-text text-white">Raw land</h4>
            </div>
            
            <div class="card float-container">
                <a href="categories.html"><img src="images/cat2.jpg" alt="House" class="img-responsive img-rounded"></a>
            <h4 class="float-text text-white">Commercial</h4>
            </div>

            <div class="card float-container">
                <a href="categories.html"><img src="images/cat2.jpg" alt="House" class="img-responsive img-rounded"></a>
                <h4 class="float-text text-white">Special Use</h4>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>/
    <!-- catagories Section Begins Here -->

    <!-- Explore Section Begins Here -->
    <section class="land-menu">
        <div class="container">
            <h1>Explore Lands</h1>

            <div class="box">
               <div class="box-image">
                 <img src="images/cat1.jpg" alt="menu raw" class="img-responsive img-rounded">
               </div>

                <div class="box-desc">
                    <h4>Raw land</h4>
                    <p class="item-price">$10,001</p>
                    <p class="item-desc">sdskfs</p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="box">
                <div class="box-image">
                    <img src="images/cat1.jpg" alt="menu raw" class="img-responsive img-rounded">
                  </div>

                   <div class="box-desc">
                       <h4>Raw land</h4>
                       <p class="item-price">$10,001</p>
                       <p class="item-desc">sdskfs</p>
                       <a href="#" class="btn btn-primary">Order Now</a>
                   </div>
            </div>

            <div class="box">
                <div class="box-image">
                    <img src="images/cat1.jpg" alt="menu raw" class="img-responsive img-rounded">
                  </div>

                   <div class="box-desc">
                       <h4>Raw land</h4>
                       <p class="item-price">$10,001</p>
                       <p class="item-desc">sdskfs</p>
                       <a href="#" class="btn btn-primary">Order Now</a>
                   </div>
            </div>

            <div class="box">
                <div class="box-image">
                    <img src="images/cat1.jpg" alt="menu raw" class="img-responsive img-rounded">
                  </div>

                   <div class="box-desc">
                       <h4>Raw land</h3>
                       <p class="item-price">$10,001</p>
                       <p class="item-desc">sdskfs</p>
                       <a href="#" class="btn btn-primary">Order Now</a>
                   </div>
            </div>

            <div class="box">

                <div class="box-image">
                    <img src="images/cat1.jpg" alt="menu raw" class="img-responsive img-rounded">
                  </div>

                   <div class="box-desc">
                       <h3>Raw land</h3>
                       <p class="item-price">$10,001</p>
                       <p class="item-desc">sdskfs</p>
                       <a href="#" class="btn btn-primary">Order Now</a>
                   </div>

            </div>

            <div class="box">

                <div class="box-image">
                    <img src="images/cat1.jpg" alt="menu raw" class="img-responsive img-rounded">
                  </div>

                   <div class="box-desc">
                       <h3>Raw land</h3>
                       <p class="item-price">$10,001</p>
                       <p class="item-desc">sdskfs</p>
                       <a href="#" class="btn btn-primary">Order Now</a>
                   </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Explore Section Begins Here -->

    <!-- social Section Begins Here -->
    <section class="social text-center">
        <div class="container">
            <h1>Connect us in.</h1>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/facebook.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/fluency/48/000000/youtube.png"/>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="https://img.icons8.com/fluency/48/000000/linkedin.png"/>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Begins Here -->

    <?php
        include('layout/footer.php');

    ?>
</body>
</html>