<?php include('application/views/include/header.php') ?>

<section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Best Hotel to Stay</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo base_url('index.php');?>home.php">Home</a></li>
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

        <div class="row ">
            <?php foreach ($query as $row):?>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading" va >
                                <?php echo $row->place_name?></h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a href="<?php echo base_url('index.php/Place_Controller/P_Restaurants2/'.$row->place_id);?>"class="btn btn-primary text-white py-2 mr-3" style="align:center">More Details..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>

<!--        <div class="row" data-aos="fade">-->
<!--            <div class="col-12">-->
<!--                <div class="custom-pagination">-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li class="active"><span>1</span></li>-->
<!--                        <li><a href="#">2</a></li>-->
<!--                        <li><a href="#">3</a></li>-->
<!--                        <li><span>...</span></li>-->
<!--                        <li><a href="#">30</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>


<?php include('application/views/include/footer.php') ?>


