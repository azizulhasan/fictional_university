<?php 

function fictional_university_setup(){
	register_nav_menus(
		array(
			'primary'=>'Main Menu',
			'footer'=>'Footer Menu',
			'footer2'=>'Footer Menu 2'
		)
	);


}
add_action('after_setup_theme','fictional_university_setup');





function university_adjust_queries($query){

if(! is_admin() and is_post_type_archive('program') and $query->is_main_query()){
	 $query->set('orderby','title');
	 $query->set('order','ASC');
	 $query->set('posts_per_page',-1);
}

if(! is_admin() and is_post_type_archive('event') and $query->is_main_query()){

		   $taday= date('Ymd');
		 $query->set('meta_key','my_event');
		 $query->set('orderby','meta_value_num');
		 $query->set('order','ASC');
		 $query->set('meta_query',array(
              array(
                'key'=>'my_event',
                'compare'=>'>=',
                'value'=> $taday,
                'type'=>'numeric'
              )
            ));
	}


}

add_action('pre_get_posts','university_adjust_queries');

function university_features(){


		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_image_size('professorLandscape', 400, 260, true);
		add_image_size('professorthumbnail', 200, 150, true);
		add_image_size('pageBannerImage', 1500, 250, true);

}
add_action('after_setup_theme','university_features');



/*-----------------------------------------------------
	page banner
------------------------------------------------------*/
function page_banner($args =null){ 
	if(! $args['title']){
		$args['title'] = get_the_title();
	
	}
	if(! $args['subtitle']){
			$args['subtitle']= get_field('page_banner_subtitle');
	}

	if(! $args['photo']){
		if(get_field('page_banner_background_image')){
			$args['photo']= get_field('page_banner_background_image') ['sizes']['pageBannerImage'];

		} 

		else {
			$args['photo'] = get_theme_file_uri('/images/ocean.jpg');
		}

	}
		
	 
		  

	?>

	          <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url( <?php echo   $args['photo'];   ?>);"></div>
    <div class="page-banner__content container container--narrow">


     <h1 class="page-banner__title"><?php echo $args['title'];  ?></h1>   
     

      <div class="page-banner__intro">

           <p><?php echo $args['subtitle']; ?></p> 
       
      </div>

    </div>  
  </div>

  <?php }

  function universityMapKey($api){


  
  	$api['key']= 'AIzaSyAIgIFHl8cmoxO6Dn-W_xOdX43wopcGDj4';
  	return $api;


  }


  add_filter('acf/fields/google_map/api','universityMapKey');







/*-----------------------------------------------------
	redirect subscriber
------------------------------------------------------*/

function redirectSubs_to_fron_end(){
	$ourCurrentUser =wp_get_current_user();

	if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
		wp_redirect(site_url('/'));
		exit;
	}

}
add_action('admin_init','redirectSubs_to_fron_end');


/*-----------------------------------------------------
	hide admin bar for subcriber
------------------------------------------------------*/


function noAdminBar_for_subsc(){
	$ourCurrentUser =wp_get_current_user();

	if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
		show_admin_bar(false);
	}

}
add_action('wp_loaded','noAdminBar_for_subsc');



/*-----------------------------------------------------
	customised login screen
------------------------------------------------------*/



function ourheaderUrl(){
	return esc_url(home_url()); 
}
add_filter('login_headerurl','ourheaderUrl');


/*-----------------------------------------------------
	customised login screen
------------------------------------------------------*/


add_action('login_enqueue_scripts', 'ourloginCss');

function ourloginCss(){
		wp_enqueue_style('main-css',get_stylesheet_uri(), null, microtime());
}




function ourLoginTitle(){
	return get_bloginfo('name'); 
}
add_filter('login_headertitle','ourLoginTitle');


