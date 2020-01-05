
  <?php include('include/header.php') ?>

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">More Information</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?php echo base_url('index.php');?>home.php">Home</a></li>
              <li>&bullet;</li>
              <li>Place Details</li>
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
    <section class="section pb-4">
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade"><?php $result = $respond[0]; echo print_r($result['place_name']);  ?></h2>
            <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
          <a href="photo.php" class="image d-block bg-image-2" style="background-image: url('../../images/img_1.jpg');"></a>
          <div class="text">
            <span class="d-block mb-4"><span class="display-4 text-primary">Visit</span> <span class="text-uppercase letter-spacing-2">& Enjoy</span> </span>
            <h2 class="mb-4">Photos</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="<?php echo base_url('index.php/Home/Cart');?>" class="btn btn-primary text-white">Add to Cart</a></p>
          </div>
        </div>
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
          <a href="https://www.google.lk/maps" class="image d-block bg-image-2 order-2" style="background-image: url('../../images/hotel_map.jpg');"></a>
          <div class="text order-1">
            <span class="d-block mb-4"><span class="display-4 text-primary">We are Guide</span> <span class="text-uppercase letter-spacing-2">your trip</span> </span>
            <h2 class="mb-4">Location info</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="<?php echo base_url('index.php/Home/Reservation/'.$result['place_name']);?>" class="btn btn-primary text-white">Book now</a></p>
              <p><a href="<?php echo base_url('index.php/Home/Review');?>" class="btn btn-primary text-white">Write Review</a></p>
          </div>
        </div>

      </div>
    </section>    

    <section class="section testimonial-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Review </h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($respond2 as $row):?>
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
<!--                <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">-->
              </div>
              <blockquote>
                <p><?php echo $row->decription?></p>
              </blockquote>
              <p><em>&mdash; <?php echo $row->customer_name?></em></p>
            </div> 
           <?php endforeach;?>
          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>

    
   <?php include('include/footer.php') ?>
    
