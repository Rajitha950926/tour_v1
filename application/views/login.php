
  <?php include('include/header.php') ?>

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Login Here</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?php base_url('index.php')?>">Home</a></li>
              <li>&bullet;</li>
              <li>Reservation</li>
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

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

              <?php echo form_open('Login_Controller/Login');?>
            <form  class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" name="email" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Password</label>
                  <input type="password"  class="form-control" name="password" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <button type="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold" name="login">Login Now</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <p> <a href="<?php echo base_url('index.php/Home/Register')?>"> Not have Account? Create An account Here</a></p>
                </div>
              </div>
            </form>
            <?php echo form_close();?>
          </div>
 
        </div>
      </div>
    </section>    
   <?php include('include/footer.php') ?>
