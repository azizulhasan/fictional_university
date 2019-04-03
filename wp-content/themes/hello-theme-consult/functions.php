<?php 


require_once(get_template_directory().'/inc/enqueue.php');
require_once(get_template_directory().'/inc/theme-setup.php');
require_once(get_template_directory().'/inc/wp_bootstrap_navwalker.php');

require_once(get_template_directory().'/inc/custom-widget.php');
// tgm plugin
require_once(get_template_directory().'/inc/activation-tgm.php');
// breadcrumb
require_once(get_template_directory().'/inc/mj-wp-breadcrumb.php');
// custom post
require_once(get_template_directory().'/inc/cs-portfolio.php');


function move_comment_field_to_bottom($fields){
	$comment_field=$fields['comment'];
	unset($fields['comment']);
	$fields['comment']=$comment_field;
	return $fields;

}
add_filter('comment_form_fields','move_comment_field_to_bottom');



/*---------------------------------
	1.framework
----------------------------------*/

require_once (get_template_directory() .'/theme-options/codestar-framework.php');
require_once (get_template_directory() .'/theme-options/framework-options.php');




//Get the_content from a post or page
function zi_content()
{
  global $post;

  return apply_filters('the_content', get_post_field('post_content', $post->id));
}

