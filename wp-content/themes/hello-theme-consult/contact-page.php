
<!-- 
    Template Name: contact page
     -->


<?php get_header(); ?>
    
    <div class="page_title_banner contact_page_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Contact</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->
    
    <div id="map"></div>

    <div class="contact_page_get_start_area">
        <div class="container">
            <div class="row">
                <div class="make_an_appoinment_area get_start_areA">
                    <div class="col-md-12">
                        <h3 class="title_get_start text-center">Ready to Get Started?</h3>
                    </div>

                  <?php echo zi_content(); ?> 
                  

                  
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--contact_page_get_start_area-->

    <div id="home1_newsletter">
        <div class="container">
            <div class="home1_newsletter">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="home1_newsletter_text">
                            <h2 class="banner_effect">Sign Up for Newsletter !</h2>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="home1_newsletter_input wow fadeInRight" data-wow-delay="300ms">
                            <form action="#" method="post">
                                <div class="Subscribe_main">
                                    <div class="Subscribe_main_input">
                                        <input type="text" class="form-control" placeholder="Enter Your Email">
                                        <input type="submit" class="Subscribe_btn" name="Subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--home1_newsletter-->
        </div><!--container-->
    </div><!--home1_newsletter-->

  <?php get_footer(); ?>