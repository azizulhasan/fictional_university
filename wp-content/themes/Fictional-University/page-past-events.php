 
<?php get_header(); 


page_banner(array(
  'title'=> 'Past Events',
  'subtitle'=>'Past Events description will go here.'

));



?>

  <div class="container container--narrow page-section">
   <?php 
        $taday= date('Ymd');
          $pastEvents= new WP_Query(array(

            'paged'=>get_query_var('paged',1),
            'post_type'=>'event',
           
            
            'meta_key'=>'my_event',
            'orderby'=>'meta_value_num',
            'order'=>'ASC',
            'meta_query'=>array(
              array(
                'key'=>'my_event',
                'compare'=>'<',
                'value'=> $taday,
                'type'=>'numeric'
              )
            )
            

          ));




     while ($pastEvents->have_posts()) {
      $pastEvents->the_post(); ?>



            <?php  get_template_part('template-parts/content', 'event') ?>
      

     
   <?php  } ?>

   <?php echo  paginate_links(array(
    'total'=> $pastEvents->max_num_pages

   )); ?>
  </div>


<?php get_footer(); ?>