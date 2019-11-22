
    
  <?php include('include/header.php') ?>

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Register Here</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
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

              <?php echo validation_errors()?>
              <?php echo form_open('Register_Controller/RegisterUser')?>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="text-black font-weight-bold" for="email">First Name</label>
                        <input type="text" id="fname" name="fname" required class="form-control ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="text-black font-weight-bold" for="email">Last Name</label>
                        <input type="text" id="lname" name="lname"  required class="form-control ">
                    </div>
                </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">User Name</label>
                  <input type="text" id="user" name="user" required class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" required class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Password</label>
                  <input type="password" id="password" name="password" required class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Confirm Password</label>
                  <input class="form-control" id="c_password" name="c_password" required type="password">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                    <button type="submit"  name="register" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Register</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <p><a href="login.php">have Account? Login Here</a></p>
                </div>
              </div>
            <?php echo form_close()?>

          </div>
 
        </div>
      </div>
    </section>    
   <?php include('include/footer.php') ?>
