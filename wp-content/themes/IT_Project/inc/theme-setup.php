<?php 

function our_theme_setup(){
	register_nav_menus(array(
		'mainmenu' => __( 'Primary Menu' ),
	));
	
	add_theme_support('post-thumbnails');


   

}
add_action('after_setup_theme' , 'our_theme_setup');




















 ?>