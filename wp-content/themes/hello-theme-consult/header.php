
    <?php wp_head(); ?>
</head>
<body>


    <?php 
    $option=get_option('consult_options');
     $reloader=$option['reloader_on'];


    if(is_array($reloader)){?>
         <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->

    <?php }

     ?>




     <?php 
        $option=get_option('consult_options');
        $menus=$option['select_menu'];
       if($menus==='header_menu_1'){?>

   <header id="header" class="header_areaa">
                <nav class="navbar extended">
                    <div class="nav-wrapper dark-wrapper inverse-text">
                        <div class="container flex-it">
                         
                                    <?php wp_nav_menu(array(


                                        'container_class'=>'navbar-collapse collapse align-left',
                                        'menu_class'=>'nav navbar-nav',
                                        'depth'=>'5',
                                        'fallback_cb'=>'wp_bootstrap_navwalker::fallback',
                                        'walker'=>new wp_bootstrap_navwalker()

                                    )) ?>



                                    
                            <div class="navbar-other">
                                <div class="align-right text-right">
                                    <div class="navbar-brand">
                                        <a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri(); ?>/images/logo_consult.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header><!-- /header -->

     
       
      <?php }else{?>

            <header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">

                    <div class="navbar-other" style="padding-right: 500px" >
                        <div class="align-left text-left">
                            <div class="navbar-brand">
                                <a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri(); ?>/images/logo_consult.png"></a>
                            </div>
                        </div>
                    </div>
                
                    
                         
                            <?php wp_nav_menu(array(


                                'container_class'=>'navbar-collapse collapse align-left',
                                'menu_class'=>'nav navbar-nav',
                                'depth'=>'5',
                                'fallback_cb'=>'wp_bootstrap_navwalker::fallback',
                                'walker'=>new wp_bootstrap_navwalker()

                            )) ?>
                    
                 



                            
                    
                </div>
            </div>
        </nav>
    </header><!-- /header -->



   
    <?php } ?> 


    



     