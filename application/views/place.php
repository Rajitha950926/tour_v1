
    <?php include('include/header.php') ?>
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Hotels, Restaurants, Guest House</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?php echo base_url('index.php');?>">Home</a></li>
              <li>&bullet;</li>
              <li>Place Category</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->
   
    <section class="section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Place_Controller/P_Hotel');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Hotel</h2>
                <span class="text-uppercase letter-spacing-1">Come and Stay</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Place_Controller/P_Restaurants');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Restaurant </h2>
                <span class="text-uppercase letter-spacing-1">Come and Enjoy</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Place_Controller/P_Kabana');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Kabana</h2>
                <span class="text-uppercase letter-spacing-1">Enjoyable night</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Place_Controller/P_Guest');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Guest House</h2>
                <span class="text-uppercase letter-spacing-1">Just Fun</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Place_Controller/P_Bungalow');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Bangalow</h2>
                <span class="text-uppercase letter-spacing-1">Professional Fun</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Place_Controller/P_Other');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Other </h2>
                <span class="text-uppercase letter-spacing-1">Your Choice</span>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>

    <?php include('include/footer.php') ?>
