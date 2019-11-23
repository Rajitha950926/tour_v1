
  <?php  include('include/header.php')?>

    <section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Edit Here</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?php echo base_url('index.php')?>">Home</a></li>
              <li>&bullet;</li>
              <li>Edit User Profile</li>
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
  <h1>Edit Profile</h1>
  <hr>
<div class="row">
    <!-- left column -->
    <div class="col-md-3">
      <div class="text-center">
        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
        <h6>Upload your photo...</h6>
        
        <input type="file" class="form-control">
      </div>
    </div>
    
    <!-- edit form column -->
    <div class="col-md-9 personal-info">
      <h3>Personal info</h3>
      
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Phone Number:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Gender:</label>
          <div class="col-md-8">
              <div class="ui-select">
              <select id="user_time_zone" class="form-control">
                <option value="Select">Select</option>
                <option value="Male"> Male </option>
                <option value="Female">Female</option>
                </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input type="button" class="btn btn-primary" value="Save Changes">
            <span></span>
            <input type="reset" class="btn btn-default" value="Cancel">
          </div>
        </div>
      </form>
    </div>
</div>
</div>
<hr>
    </section>    
   <?php include('include/footer.php')?>
