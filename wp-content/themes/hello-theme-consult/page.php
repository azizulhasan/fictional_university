<?php 
get_header();?>

<?php 	
while (have_posts()): the_post();
get_template_part('template_parts/page/content', 'page');


		if(comments_open() || get_comments_number()):
				comments_template();
		endif;

endwhile;

	?>


		



<?php get_footer();?>