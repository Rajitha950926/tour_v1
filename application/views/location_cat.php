 <?php include('include/header.php') ?>

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/kandy.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Best Tour Category to Visit</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?php echo base_url();?>home.php">Home</a></li>
              <li>&bullet;</li>
              <li>Category</li>
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

    <section class="section blog-post-entry bg-light" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Location_Controller/L_Adventure');?>" class="room" d>
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/a_2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Adventure</h2>
                <span class="text-uppercase letter-spacing-1">Visit and Enjoy</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Location_Controller/L_Hiking');?>" class="room" >
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/h_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Hiking</h2>
                <span class="text-uppercase letter-spacing-1">Visit and Enjoy</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Location_Controller/L_Surfing');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/s_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Surfing</h2>
                <span class="text-uppercase letter-spacing-1">Visit and Enjoy</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Location_Controller/L_Ancient');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/n_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Ancient</h2>
                <span class="text-uppercase letter-spacing-1">Come and Enjoy</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Location_Controller/L_Natural');?>" class="room">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/nt_2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Natural </h2>
                <span class="text-uppercase letter-spacing-1">Come and Enjoy</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="<?php echo base_url('index.php/Location_Controller/L_Wild_Safari');?>" class="room" data-elimid="5">
              <figure class="img-wrap">
                <img src="<?php echo base_url();?>images/sf_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Wild Safari</h2>
                <span class="text-uppercase letter-spacing-1">Come and Enjoy</span>
              </div>
            </a>
          </div>

        </div>
      </div><!--container-->
    </section>

 
    <?php include('include/footer.php') ?>
