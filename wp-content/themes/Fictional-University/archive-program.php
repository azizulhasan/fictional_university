
<?php get_header();
page_banner(array(
  'title'=> 'All Programs',
  'subtitle'=>'here will go all Programs subtitle.'

));



 ?>


  <div class="container container--narrow page-section">
    <ul class="link-list min-list">
     
    <?php while (have_posts()) {
      the_post(); ?> 
    
      <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
      

     
   <?php  } ?>
   </ul>
   </div>




   <?php the_posts_pagination(); ?>
  
    

  



<?php get_footer(); ?>