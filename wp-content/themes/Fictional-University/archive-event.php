
<?php get_header(); 


page_banner(array(
  'title'=> 'All Events',
  'subtitle'=>'here will go all events subtitle.'

));




?>


  <div class="container container--narrow page-section">
    <?php while (have_posts()) {
      the_post(); ?>


            <?php  get_template_part('template-parts/content', 'event') ?>
      

     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
   <hr class="section-break">
    <h2>Loocking for past events ? <a href="<?php echo home_url('/past-events') ?>">Click Here........</a></h2>

  </div>



<?php get_footer(); ?>  





