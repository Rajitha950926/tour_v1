<?php include('include/header.php') ?>

<section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Write Review</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo base_url('index.php');?>">Home</a></li>
                    <li>&bullet;</li>
                    <li>Write Review</li>
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

<section class="section contact-section" id="next">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

                <?php echo form_open_multipart('Review_Controller/review_submit');?>
<!--                <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">-->
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Place Name</label>
                            <input type="text" id="place_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="customer_name">Customer Name</label>
                            <input type="customer_name" id="customer_name" class="form-control" name="customer_name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="customer_name">Over All Status</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="over_all"  id="over_all" class="form-control" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12 form-group">
                            <label for="message">Write Review</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="" accept="image/*" name="path_name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <button class="btn btn-primary text-white font-weight-bold" type="submit">Submit Review</button>
                        </div>
                    </div>
<!--                </form>-->
                <?php echo form_close();?>

            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php')?>
