
<?php get_header();
page_banner();


 ?>

<?php while (have_posts()) {
      the_post(); ?>


       

  <div class="container container--narrow page-section">
   
     
       
        
        <div class="generic-content">
        <div class="row group">

          <div class="one-third">
            <?php the_post_thumbnail('professorPortrait'); ?>
          </div>

          <div class="two-thirds">
            <?php

              $likeCount = new WP_Query(array(
                'post_type' => 'like',
                'meta_query' => array(
                  array(
                    'key' => 'liked_professor_id',
                    'compare' => '=',
                    'value' => get_the_ID()
                  )
                )
              ));

              $existStatus = 'no';

              if (is_user_logged_in()) {
                $existQuery = new WP_Query(array(
                  'author' => get_current_user_id(),
                  'post_type' => 'like',
                  'meta_query' => array(
                    array(
                      'key' => 'liked_professor_id',
                      'compare' => '=',
                      'value' => get_the_ID()
                    )
                  )
                ));

                if ($existQuery->found_posts) {
                  $existStatus = 'yes';
                }
              }

              

            ?>

            <span class="like-box" data-like="<?php echo $existQuery->posts[0]->ID; ?>" data-professor="<?php the_ID(); ?>" data-exists="<?php echo $existStatus; ?>">

              <i class="fas fa-heart"aria-hidden="true"></i>
              <i class="far fa-heart" aria-hidden="true"></i>

              
              <span class="like-count"><?php echo $likeCount->found_posts; ?></span>
            </span>
            <?php the_content(); ?>
            
            
          </div>

        </div>
      </div>
           

   
           
           


 

           <?php 

           $relatedPrograms = get_field('related_program');
           
           if($relatedPrograms){
            echo '<hr/>'; 

            echo '<h2 class="headline headline--medium ">Subjects  Taught</h2>';
            echo '<ul class="link-list min-list">';
           foreach ($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program) ?></a></li>

              
          <?php  }
          echo '</ul>';

           }

            ?>
          
       
   
     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
  </div>

 
<?php get_footer(); ?>


