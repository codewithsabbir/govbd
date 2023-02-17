<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
    <?php wp_head() ; ?>
    
</head>
<body>
    
    <!-- HEADER PART START -->
    <header class="cont">
        <div class="row">
            <div class="col-lg-6 header_left">
              <?php dynamic_sidebar('thl') ; ?>
            </div>
            <div class="col-lg-6 header_right">
            <?php dynamic_sidebar('thr') ; ?>
            </div>
        </div>
    </header>
    <!-- HEADER PART END -->

    <!-- HEADER LOGO PART START -->
        <section class=" logo cont">
            <div class="row">
                <div class="col-lg-4 logo_left">
                  <?php the_custom_logo() ; ?>

                    <!-- <a href="#"> <img src="./assets/images/header/logo_bn.png" alt="SITE LOGO"></a> -->
                </div>
                <div class="col-lg-5 logo_search">
                  <?php dynamic_sidebar('search') ; ?>
                    <!-- <input type= "text" placeholder="খুঁজুন">
                    <button> অনুসন্ধান </button> -->
                </div>
                <div class="col-lg-3 logo_right d-flex justify-content-end">
                    <div class="logo1">
                      
                      <?php dynamic_sidebar('a2i') ; ?>
                        <!-- <a href="#"><img src="./assets/images/header/a2i-logo-footer.png" alt=""></a> -->
                    </div>
                    <div class="logo2">
                      <?php dynamic_sidebar('sclogo'); ?>
                        <!-- <p> সাথেই থাকুন</p>
                        <a href="#"><img src="./assets/images/header/facebook-icon.png" alt=""></a>
                        <a href="#"><img src="./assets/images/header/twitter-blue-icon.png" alt=""></a>
                        <a href="#"><img src="./assets/images/header/youtube-icon.png" alt=""></a>
                        <a href="#"><img src="./assets/images/header/gplus-icon.png" alt=""></a> -->
                    </div>
                </div>
            </div>

        </section>

    <!-- HEADER LOGO PART END -->

   <!-- Menu Part Start -->

   <section class="cont">
        <div class="container navbar-expand s_menu">
            <?php 
             wp_nav_menu(array(
            'theme_location'=>'TM',
            'menu_class'=>'navbar-nav menu_1'
             ) );
            ?>
        </div>
    </section>
<!-- Menu Part End -->

    <!-- HERO PART START -->
    <section class="cont">
        <div class="row hero">
            <div class="col-lg-8 hero_main">
                <div class="banner mt-3">
                  <?php dynamic_sidebar('banner') ; ?>

                    <!-- <a href="#"><img src="./assets/images/banner/padmabanner.jpg" class="d-block w-100"  alt=""></a> -->
                </div>
                <!-- slider part start -->
                <div class="slider mt-2">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">

                    <div class="carousel-inner">

                    <?php
                    $x=0;
                        while (have_posts()):the_post();
                    $x++;
                    ?>

                        <div class="carousel-item <?= ($x==1)? 'active':'' ?> ">
                            <?php the_post_thumbnail(); ?>
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        </div>
                        <!-- <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        </div> -->
                        <?php endwhile; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <!-- slider part end -->

                <!-- TAB PART START -->
                <div class="tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">
                            <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                            <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                <div class="col-lg-2 tab-1">
                                    <?php dynamic_sidebar('tabitem1') ; ?>
                                </div>
                                
                            </div>
                        </div>
                      </div>
                </div>
                <!-- TAB PART END -->
                <!-- NEWS PART START -->
                <div class="news pt-3">
                    <?php dynamic_sidebar('news') ; ?>
                    <!-- <h4>উদ্যোগ </h4>
                    <ul>
                        <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                        <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                        <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                        <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                        <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
                    </ul> -->
                    <div class="row">
                        <div class="btn">
                          <button> <a id="tt" href="">সকল</a></button>
                        </div>
                    </div>
                </div>
                <!-- NEWS PART END -->
                
            </div>

            <!-- SIDE BAR PART START -->
              <div class="col-lg-4 hero_slide">
                <div class="sidebar_img d-block w-100 mt-1">
                    <?php dynamic_sidebar('sideimg1') ; ?>

                    <form action="">
                      <select name="" id="">
                        <option value="">ওয়েবসাইট বাছাই করুন</option>
                      </select>
                    </form>
                </div>
                <div class="sidebar_video">
                      <?php dynamic_sidebar('sidevideo') ; ?>
                </div>
              </div>
            <!-- SIDE BAR PART START -->

        </div>
    </section>
    <!-- HERO PART END -->
    <!-- PORTAL -->
    <!-- PORTAL -->
    <!-- FOOTER PART START -->
    <footer class="cont">
        <div class="row footer_top">
          <?php dynamic_sidebar('ftimage') ; ?>
          <!-- <img src="./assets/images/footer/footer_top_bg.png" alt=""> -->
        </div>
        <div class="row footer_bottom">
          <div class="col-lg-8 fb_left">
          <section class="cont">
        <div class="container navbar-expand s_menu">
            <?php 
             wp_nav_menu(array(
            'theme_location'=>'TM',
            'menu_class'=>'navbar-nav menu_1'
             ) );
            ?>
        </div>
    </section>
            <p class="copy-right-text">সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
          </div>
          <div class="col-lg-4 fb_right">
            <p> পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
              <?php dynamic_sidebar('np_logo') ; ?>
            <!-- <img src="/Assets/images/footer/np-logo-set.png" alt=""> -->
          </div>
        </div>
       
      </footer>
    
    <!-- FOOTER PART END -->











    <?php wp_footer() ; ?>
</body>
</html>