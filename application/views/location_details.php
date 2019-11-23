<?php include('include/header.php') ?>

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">More Information</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?php echo base_url('index.php');?>">Home</a></li>
              <li>&bullet;</li>
              <li>Location Details</li>
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
   
    <section class="section bg-light">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade"><?php $result = $respond[0]; echo print_r($result['place_name']);  ?></h2>
            <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
          <a href="#" class="image d-block bg-image-2" style="background-image: url('images/img_1.jpg');"></a>
          <div class="text">
            <span class="d-block mb-4"><span class="display-4 text-primary">Visit</span> <span class="text-uppercase letter-spacing-2">& Enjoy</span> </span>
            <h2 class="mb-4">Photos</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="<?php echo base_url('index.php/Home/Weather');?>" class="btn btn-primary text-white">Check Weather Condition</a></p>
          </div>
        </div>
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
          <a href="https://www.google.lk/maps" class="image d-block bg-image-2 order-2" style="background-image: url('images/map.jpg');"></a>
          <div class="text order-1">
            <span class="d-block mb-4"><span class="display-4 text-primary">We are Guide</span> <span class="text-uppercase letter-spacing-2">your trip</span> </span>
            <h2 class="mb-4">Location info</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="<?php echo base_url('index.php/L_Details_Controller/l_details');?>" class="btn btn-primary text-white">Choose Place to Stay</a></p>
          </div>
        </div>

      </div>
    </section>    
   <?php include('include/footer.php') ?>
    
