<?php include('header.php'); ?>
<!-- BANNER AREA -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="margin-top:-30px">
        <div class="carousel-item active" style="background:linear-gradient(#0000007d,#0000007d),url('images/slide1.jpg') center;">
            <div class="carousel-caption">
                <h3 class="animate__animated animate__fadeInLeft">Join Our Online Courses</h3>
                <a href="courses-list.php" class="play-btn animate__animated animate__fadeInUp">Join Now</a>a
            </div>
        </div>
        <div class="carousel-item" style="background:linear-gradient(#0000007d,#0000007d),url('images/slide2.jpg') center;">
            <div class="carousel-caption">
                <h3 class="animate__animated animate__fadeInLeft">Buy Ayurvedic Products, Chyavanprash</h3>
                <a href="products.php" class="play-btn animate__animated animate__fadeInUp">Buy Now</a>
            </div>
        </div>

        <div class="carousel-item" style="background:linear-gradient(#0000007d,#0000007d),url('images/yoga-mudle.jpg') center; background-size: cover;">
            <div class="carousel-caption">
                <h3 class="animate__animated animate__fadeInLeft">Personal Yoga Module</h3>
                <a href="single-service.php?id=7" class="play-btn animate__animated animate__fadeInUp">Join Now</a>
            </div>
        </div>

        <div class="carousel-item" style="background:linear-gradient(#0000007d,#0000007d),url('images/banner.jpg') center; background-size: cover !important;">
            <div class="carousel-caption">
                <h3 class="animate__animated animate__fadeInLeft">Know Your Body Type</h3>
                <a href="single-service.php?id=8" class="play-btn animate__animated animate__fadeInUp">Book Now</a>
            </div>
        </div>
        
        <div class="carousel-item" style="background:linear-gradient(#0000007d,#0000007d),url('images/panchkarma-detox.jpg') center;">
            <div class="carousel-caption">
                <h3 class="animate__animated animate__fadeInLeft">Our Services <br> Panchkarma & Detox</h3>
                <a href="panchkarma.php" class="play-btn animate__animated animate__fadeInUp">Book Now</a>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <i class="fa fa-long-arrow-left"></i>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <i class="fa fa-long-arrow-right"></i>
  </a>
</div>
<!-- END BANNER AREA -->
<section class="product__section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-5">
                <a href="consultations.php">
                    <div class="card">
                        <div class="pro__img">
                            <img src="images/product1.jpg" alt="medicine" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="pb-2">Consultations</h4>
                            <a href="consultations.php" class="pro__btn pl-3 pr-3">BOOK NOW</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-5">
                <a href="single-product.php?product=15">
                    <div class="card">
                        <div class="pro__img">
                            <img src="images/cibooster.jpg" alt="medicine" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="pb-2">Immunity Booster Kit</h4>
                            <a href="single-product.php?product=15" class="pro__btn pl-3 pr-3">BUY NOW</a>
                        </div>
                    </a>
                </div>
            </div>
              <div class="col-lg-3 col-md-6 col-6 mb-3 mb-5">
                <a href="single-product.php?product=14">
                    <div class="card">
                        <div class="pro__img">
                            <img src="images/product2.jpg" alt="medicine" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="pb-2">Chyavanprash</h4>
                            <a href="single-product.php?product=14" class="pro__btn pl-3 pr-3">BUY NOW</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-5">
                <a href="panchkarma.php">
                    <div class="card">
                        <div class="pro__img">
                            <img src="images/panchkarma.jpg" alt="medicine" class="img-fluid">
                        </div>  
                        <div class="card-body text-center">
                            <h4 class="pb-2">Panchkarma & Detox</h4>
                            <a href="panchkarma.php" class="pro__btn pl-3 pr-3">BOOK NOW</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-5">
                <a href="courses-list.php">
                    <div class="card">
                        <div class="pro__img">
                            <img src="images/product-5.jpg" alt="medicine" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="pb-2">Online Courses</h4>
                            <a href="courses-list.php" class="pro__btn pl-3 pr-3">JOIN NOW</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<?php include('comp/about/about.php') ?>
<!-- About Section -->
<section class="page__content mb-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-7 mb-4 order-lg-1 order-2">
                <p class="text-justify page_content_para">We offers a variety of therapeutic packages which includes: Metabolic disorder correction, Liver and GIT disorders treatment, Treatment for disorders of joints and spine, Urological disorder treatment, Anxiety and Stress disorders management and Panchkarma for healthy people.
                </p>
            </div>
            <div class="col-lg-5 mb-4 order-lg-2 order-1">
             <img src="images/herb-img2.jpg" class="img-fluid">
         </div>
         <div class="col-lg-5 mb-4">
             <img src="images/herb-img3.jpg" class="img-fluid">
         </div>
         <div class="col-lg-7 mb-4">
            <p class="text-justify page_content_para">Ayurveda, a highly scientific process, holds the secret of longevity, what sages and seekers have termed the Eternal Fountain of Youth. The Indian system of curative therapy has its roots in the natural flora and fauna. Ayurvedic preparations called bhasms, churns, tailums etc. involve complicated processes like delicate measurements, meticulous heating, cooling, grinding, paste making and differential cooking mechanisms and a number of other decoctions and extracts – all which are individual specific as per the need and extent of each persons problems.</p>
        </div>
    </div>
    <div>
        <a href="all-content.php" class="read__more">Read More</a>
    </div>
</div>
</div>
</section>
<div class="popup">
    <?php include('popup.php') ?>
</div>
<?php include('footer.php') ?>