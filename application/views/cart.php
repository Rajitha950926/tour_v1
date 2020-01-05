<?php include ('include/header.php');?>
<section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Your Cart</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo base_url('index.php');?>">Home</a></li>
                    <li>&bullet;</li>
                    <li>Rooms</li>
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
<section class="section bg-light">

    <div class="container">

        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
            <a href="photo.php" class="image d-block bg-image-2" style="background-image: url('../../images/img_1.jpg');"></a>
            <div class="text">
                <span class="d-block mb-4"><span class="display-4 text-primary">Visit</span> <span class="text-uppercase letter-spacing-2">& Enjoy</span> </span>
                <h2 class="mb-4">Photos</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="<?php echo base_url('index.php/Home/Cart');?>" class="btn btn-primary text-white">Book Now</a></p>
                <p><a href="<?php echo base_url('index.php/Home/Cart');?>" class="btn btn-primary text-white">Remove</a></p>
            </div>
        </div>

    </div>
</section>
<?php include ('include/footer.php');?>
