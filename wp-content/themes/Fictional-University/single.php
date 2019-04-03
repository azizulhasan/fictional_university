
<?php get_header(); 


page_banner();



?>



  <div class="container container--narrow page-section">
    <?php while (have_posts()) {
      the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--mediun headline--post-title"><a href="<?php the_permalink(); ?>">the heading one.</a></h2>
        
        <div class="generic-content">
        	 <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> BLOG HOME</a> <span class="metabox__main">posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y') ?> in <?php the_category(','); ?> </span></p>
    </div>
          <?php the_content(); ?>
          
        </div>
      </div>
     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
  </div>


<?php get_footer(); ?>
