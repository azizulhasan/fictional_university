<?php 


/**
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_portfolio_init() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No portfolio found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No portfolio found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'codex_portfolio_init' );






// hook into the init action and call create_book_taxonomies when it fires


// create two taxonomies, Portfolios and Tags for the post type "book"
function create_portfolio_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Portfolios', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Portfolio', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Portfolios', 'textdomain' ),
		'all_items'         => __( 'All Portfolios', 'textdomain' ),
		'parent_item'       => __( 'Parent Portfolio', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'textdomain' ),
		'edit_item'         => __( 'Edit Portfolio', 'textdomain' ),
		'update_item'       => __( 'Update Portfolio', 'textdomain' ),
		'add_new_item'      => __( 'Add New Portfolio', 'textdomain' ),
		'new_item_name'     => __( 'New Portfolio Name', 'textdomain' ),
		'menu_name'         => __( 'Portfolio', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio' ),
	);

	register_taxonomy( 'portfolio', array( 'portfolio' ), $args );





 // Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Tags', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Tags', 'textdomain' ),
		'popular_items'              => __( 'Popular Tags', 'textdomain' ),
		'all_items'                  => __( 'All Tags', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag', 'textdomain' ),
		'update_item'                => __( 'Update Tag', 'textdomain' ),
		'add_new_item'               => __( 'Add New Tag', 'textdomain' ),
		'new_item_name'              => __( 'New Tag Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate tag with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove tag', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used tag', 'textdomain' ),
		'not_found'                  => __( 'No tag found.', 'textdomain' ),
		'menu_name'                  => __( 'Tags', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'tag' ),
	);

	register_taxonomy( 'tag', 'portfolio', $args ); 

	
}
add_action( 'init', 'create_portfolio_taxonomies', 0 );


/*-----------------------------------------------------------------------
		#. Create Custom Meta Box.
------------------------------------------------------------------------*/

function portofolio_add_meta_box(){




	add_meta_box(
		'portfolio_section_id',
		'Portfolio Metabox',
		'portfolio_section_callback',
		'portfolio',
		 'normal',
		  'default'
		);


}
add_action('add_meta_boxes', 'portofolio_add_meta_box');

function portfolio_section_callback($post_id){

	wp_nonce_field('portfolio_meta_box','portfolio_metabox_nonce')

	;?>



	<p>
		<label for="">Title</label>
		<input type="text" name='title'  value="<?php echo get_post_meta($post_id->ID,'title', true);?>" >
	</p> 


	

   <?php   };



   function portfolio_save_meta($post_id){
   	//chech if our nonce is set.

   	if(! isset($_POST['portfolio_metabox_nonce'])){
   		return;
   	}
   	//varify that the nonce is valid.
   	if(! wp_verify_nonce($_POST['portfolio_metabox_nonce'],'portfolio_meta_box')){
   		return;
   	}
   	//make sure that it (input) is set.
   	if (! isset($_POST['title'])){
   		return;
   	}

   	//senitize user input.
   	$my_title=sanitize_text_field($_POST['title']);

   	//update the meta field in the database.
   	update_post_meta($post_id,'title',$my_title);


   }
   add_action('save_post','portfolio_save_meta');
?>

<?php 
echo get_post_meta($post_id->ID,'title',true); ?>

