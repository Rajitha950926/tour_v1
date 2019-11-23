<?php include('include/header.php') ?>

    <section class="site-hero overlay" style="background-image: url(images/kandy.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To Sri Lanka </span>
            <h1 class="heading">A Best Place To Visit & Stay</h1>
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
                  <label for="checkin_date" class="font-weight-bold text-black">Choose your prefer Language</label>
                </div>
                <div class="col-md-12 mb-3 mb-lg-0 col-lg-3">
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">English-US</option>
                          <option value="">Hindi</option>
                          <option value="">China</option>
                          <option value="">Sinhala</option>
                        </select>
                     </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Change of Language</button>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Restore</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>
    <!--END OF section-->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="<?php echo base_url(); ?>images/slide_three.jpg" alt="Image" class="img-fluid">
            </figure>
            <img src="<?php echo base_url(); ?>images/beach.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Sri Lanka is a beautiful little island nation parked perilously close to India; a little too hot, a little too humid, and perhaps too expensive, but to its credit are fantastic beaches, strangely melancholy hills, and the ruins of kingdoms past.</p>
            <p><a href="<?php echo base_url('index.php/Home/login');?>" class="btn btn-primary text-white py-2 mr-3">Sign In</a> <span class="mr-3 font-family-serif"><em>or</em></span><a href="<?php echo base_url('index.php/Home/Register');?>" class="btn btn-primary text-white py-2 mr-3">Sign UP</a> </p>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="section bg-image overlay" style="background-image: url('images/camp.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Best Tour Category</h2>
            <p class="text-white" data-aos="fade" data-aos-delay="100">Sri Lanka is a beautiful little island nation parked perilously close to India; a little too hot, a little too humid, and perhaps too expensive, but to its credit are fantastic beaches, strangely melancholy hills, and the ruins of kingdoms past.</p>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Adventure</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Surfing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="drink-tab" data-toggle="tab" href="#drink" role="tab" aria-controls="drink" aria-selected="false">Hiking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Historical</a>
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            
            <!--first-->
            <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Kithulgala</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Bomburu Alla</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Mee Muree</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Riverston</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Place One</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Place two</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div><!--col-md-6-->
              </div><!--row-->
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-12">
                      <a href="login.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More...</a>
                </div><!--col-md-12-->
              </div><!--row-->
            </div> <!-- .tab-pane -->
            <!--end first start seccond-->
            <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Mirissa</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Unawatuna</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Hikkaduwa</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Arugambay</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Nilaweli</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Paasikuda</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-12">
                      <a href="login.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More...</a>
                </div><!--col-md-12-->
              </div><!--row-->
            </div> <!-- .tab-pane -->
              <!--end second start third-->
            <div class="tab-pane fade text-left" id="drink" role="tabpanel" aria-labelledby="drink-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Yahangala</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Narangala</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Nakals</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Alla rock</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                
                </div>
              </div>
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-12">
                      <a href="login.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More...</a>
                </div><!--col-md-12-->
              </div><!--row-->
            </div> <!-- .tab-pane -->
              <!--end third start fouth-->
              <div class="tab-pane fade text-left" id="history" role="tabpanel" aria-labelledby="history-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Katharagama</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Mahiyanganaya</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Saman dewalaya</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Temple tooth</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Kaluthara bodhiya</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">Anuradhapura</span>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-12">
                      <a href="login.php" class="btn btn-primary text-white py-2 mr-3" style="align:center">More...</a>
                </div><!--col-md-12-->
              </div><!--row-->
            </div> <!-- .tab-pane -->
            <!--end fouth-->
          </div>
        </div>
      </div>
    </section>

  <?php include('include/footer.php') ?>
    
