
<?php get_header(); ?>
    
    <div class="page_title_banner blog_sidebar_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog Sidebar</h2>
                <?php if(function_exists('mj_wp_breadcrumb')) mj_wp_breadcrumb(); ?>


                <!-- <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Blog sidebar</li>
                </ul> -->
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->

    <div class="blog_page_area">
        <div class="container">
            <div class="row">
            
            
                <div class="col-md-8">
                
                    <div class="blog_left_side_area">


                        <?php if(have_posts()):
                                while (have_posts()):the_post();?>

                                    <div class="blog_left_single_item">
                                        <div class="blog_pic image_fulwidth">
 <a href="<?php the_permalink(); ?>"><img height="300px" width="100%" src="<?php the_post_thumbnail() ?>"> </a>

                                   <h4 class="date_position">
                                     Posted By:  <?php the_author_posts_link() ?>
                                    | Posted In :  <?php the_category() ?>
                                    | Posted On :  <?php the_time('M d, Y') ?>
                                     | <?php comments_popup_link('No Comments','1 comment', '% Comments', 'my_comment_class', 'Comments Off') ?>

                                   </h4>         
                                        </div>

                                        <div class="blog_left_single_content para_default">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                                            <p><?php echo wp_trim_words(get_the_content(), 40) ?></p>
                                        </div>
                                    </div><!-- blog_left_single_item -->
  
                                <?php endwhile; 
                                    else:
                                        get_template_part('');
                                    endif;


                                ?>

                                    <div class="blog_pagination">
                                        <nav>
                                            <ul class="pagination pagination-lg">
                                              <?php the_posts_pagination( array(
                                 'mid_size' => 3,
                                  'prev_text' => __( '<i class="flaticon-left-arrow"></i>', 'textdomain' ),
                                 'next_text' => __( '<i class="flaticon-right-arrow"></i>','textdomain' ),
                                                ) ); ?>
 



                                              
                                            </ul>
                                        </nav>
                                    </div>

                        
                    </div><!-- blog_left_side_area -->
                    
                </div><!-- col-md-8 -->
                
                
                <div class="col-md-4">
                    <div class="blog_right_side_area">
                        <?php echo dynamic_sidebar('Main Sidebar') ?>
                       
                    
                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <form action="#" method="post" class="blog_search">
                                    <input type="text" placeholder="Search...">
                                    <div class="blog_search_btn"> <input type="submit" value=""></div>
                                </form>
                            </div>
                        </div><!-- blog_right_widget  -->
                        
                        
                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <h3 class="blog_widget_title">Categories</h3>
                                <ul>
                                    <li><a href="service-details-page-01.html">Business Modules</a></li>
                                    <li><a href="service-details-page-02.html">Development</a></li>
                                    <li><a href="service-details-page-03.html">Consultancy Service</a></li>
                                    <li><a href="service-details-page-04.html">Marketing Strategy</a></li>
                                    <li><a href="service-details-page-05.html">Finance Management</a></li>
                                    <li><a href="service-details-page-06.html">Audit & Assurance</a></li>
                                    <li><a href="service-details-page-07.html">Taxation</a></li>
                                </ul>
                            </div>
                        </div><!-- blog_right_widget  -->


                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <h3 class="blog_widget_title">Project</h3>
                                <div class="project_div clearfix">
                                    <figure class="image">
                                        <a href="images/blog_project_item_01.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_01.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_02.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_02.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_03.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_03.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_04.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_04.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_05.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_05.jpg" alt="images">
                                        </a>
                                    </figure>

                                    <figure class="image">
                                        <a href="images/blog_project_item_06.jpg" data-fancybox="gallery">
                                            <img src="images/blog_project_item_06.jpg" alt="images">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div><!-- blog_right_widget  -->

                        <div class="blog_right_widget">
                            <div class="blog_widget">
                                <h3 class="blog_widget_title">Archive</h3>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <select>
                                            <option value="Select Month">
                                                Select Month
                                            </option>
                                            <option value="saab">
                                                January 2017
                                            </option>
                                            <option value="mercedes">
                                                february 2017
                                            </option>
                                            <option value="audi">
                                                March 2017
                                            </option>
                                            <option value="audi">
                                                April 2017
                                            </option>
                                            <option value="audi">
                                                August 2017
                                            </option>
                                            <option value="audi">
                                                Dcember 2017
                                            </option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div><!-- blog_right_widget  -->
                    </div>
                </div><!-- col-md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- blog_page_area -->

    <?php get_footer(); ?>

   