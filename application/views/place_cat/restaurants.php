<?php include('application/views/include/header.php') ?>

<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Best Restaurants to Eat</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo base_url();?>home.php">Home</a></li>
                    <li>&bullet;</li>
                    <li>More Places.</li>
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
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="100">

                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="images/sample.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#">Place one</a></h2>
                        <p>Description About Place</p>
                        <a href="<?php echo base_url();?>location_details.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="images/sample.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#"></a>Place two</a></h2>
                        <p>Description About Place</p>
                        <a href="<?php echo base_url();?>location_details.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="images/sample.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#">Place three</a></h2>
                        <p>Description About Place</p>
                        <a href="<?php echo base_url();?>" class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="100">

                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="images/sample.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#">Place four</a></h2>
                        <p>Description About Place</p>
                        <a href="<?php echo base_url();?>location_details.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="images/sample.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#">Place five</a></h2>
                        <p>Description About Place</p>
                        <a href="<?php echo base_url();?>location_details.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="media media-custom d-block mb-4 h-100">
                    <a href="#" class="mb-4 d-block"><img src="images/sample.jpg" alt="Image placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h2 class="mt-0 mb-3"><a href="#">Place six</a></h2>
                        <p>Description About Place</p>
                        <a href="<?php echo base_url();?>location_details.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" data-aos="fade">
            <div class="col-12">
                <div class="custom-pagination">
                    <ul class="list-unstyled">
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">30</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('application/views/include/footer.php') ?>

