
<?php get_header(); 
   page_banner();


?>


    

  <div class="container container--narrow page-section">
    <?php while (have_posts()) {
      the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--mediun headline--post-title"><a href="<?php the_permalink(); ?>"></a></h2>


        <div class="metabox metabox--position-up metabox--with-home-link">
              <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('campus');?>"><i class="fa fa-home" aria-hidden="true"></i> All Campuses</a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>
        
      <div class="generic-content">
        
           <?php the_content(); 
            $mapLocation=get_field('map_location');
           ?>
           <div class="acf-map">
     
   
    
     <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" dat-lng="<?php echo $mapLocation['lng'] ?>">
       <h3 href="<?php the_permalink() ?>"><?php the_title() ?></h3>
       <?php echo $mapLocation['address'] ?>
     </div>

     
   <?php  } ?>
   </div>


           <?php 

           
             $relatedPrograms= new WP_Query(array(
               'post_type'=>'program',
               'orderby'=>'title',
               'order'=>'ASC',
              
               'meta_query'=>array(
                 array(
                  'key'=>'related_campus',
                  'compare'=>'LIKE',
                  'value'=>'"' .get_the_ID(). '"'


                 )
               )
               

             ));
             if($relatedPrograms->have_posts()){

             echo '<h4 class="headline headline--medium"> Programs are available at this campus.</h4>';
             echo '<ul class="min-list link-lisk">';
             while ($relatedPrograms->have_posts()) {
               $relatedPrograms->the_post();?>


               <a href="<?php the_permalink() ?>">
                 <?php the_title(); ?>
               </a>

               

            <?php } 
             echo '</ul>';
             }

             wp_reset_postdata();




           $taday= date('Ymd');
             $commingEvents= new WP_Query(array(
               'post_type'=>'event',
               'posts_per_page'=>2,
               
               'meta_key'=>'my_event',
               'orderby'=>'meta_value_num',
               'order'=>'ASC',
               'meta_query'=>array(
                 array(
                   'key'=>'my_event',
                   'compare'=>'>=',
                   'value'=> $taday,
                   'type'=>'numeric'
                 ),
                 array(
                  'key'=>'related_program',
                  'compare'=>'LIKE',
                  'value'=>'"' .get_the_ID(). '"'


                 )
               )
               

             ));
             if($commingEvents->have_posts()){

             
               echo '<hr/ class="section-break">';

               echo '<h4>NOtice</h4>';
                echo 'my this function is no working. <h5>function is which program doesno have any upcommin event will no show here, right bello . program is created as instracted.</h5>';

             echo '<h4 class="headline headline--medium"> Upcomming '.get_the_title().' Event.</h2>';
             while ($commingEvents->have_posts()) {
               $commingEvents->the_post();?>


                 <?php  get_template_part('template-parts/content', 'event') ?>


            <?php }

             }

            ?>
         </div> 
      </div>
     
   

   <?php the_posts_pagination(); ?>
  </div>


<?php get_footer(); ?>
