
<?php get_header();
page_banner(array(
  'title'=> 'All Campuses',
  'subtitle'=>'here will go all Campuses subtitle.'

));



 ?>


  <div class="container container--narrow page-section">
    <div class="acf-map">
     
    <?php while (have_posts()) {
      the_post();
      $mapLocation=get_field('map_location')


       ?> 
    
     <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" dat-lng="<?php echo $mapLocation['lng'] ?>">
      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
       <?php echo $mapLocation['address'] ?>
     </div>

     
   <?php  } ?>
   </div>
   </div>




   <?php the_posts_pagination(); ?>
  
    

  



<?php get_footer(); ?>