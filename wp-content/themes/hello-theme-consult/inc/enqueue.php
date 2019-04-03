<?php 

function resources_css_js(){

	wp_enqueue_style('my-style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');



	// css file
	wp_enqueue_style('favicon', get_template_directory_uri().'/images/favicon.ico', array(), '1.0.0', 'all');


	wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all');

	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');


	wp_enqueue_style('gfonts', consult_fonts_url(), array(), '1.0.0' );



	// wp_enqueue_style('googleapis', get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900', array(), '1.0.0', 'all');




	wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), '1.0.0', 'all');


	wp_enqueue_style('oul-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');


	wp_enqueue_style('layers', get_template_directory_uri().'/rs-plugin/css/layers.css', array(), '1.0.0', 'all');
	wp_enqueue_style('settings', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('plugins', get_template_directory_uri().'/assets/css/plugins.css', array(), '1.0.0', 'all');
	wp_enqueue_style('icons', get_template_directory_uri().'/assets/css/icons.css', array(), '1.0.0', 'all');
	wp_enqueue_style('menu-css', get_template_directory_uri().'/assets/css/menu-css.css', array(), '1.0.0', 'all');


	 

	// custom css
	wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');

	wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');

	// comment style
	wp_enqueue_style('consulst-comment-style', get_template_directory_uri());
	if(is_singular()) wp_enqueue_script('comment-reply');


	wp_enqueue_style('original', get_template_directory_uri().'/assets/css/original.css', array(), '1.0.0', 'all');
	wp_enqueue_style('my-main', get_template_directory_uri().'/assets/css/my-main.css', array(), '1.0.0', 'all');



	// js file
	



	// wp_enqueue_script( 'jquery',  get_template_directory_uri().'/assets/js/jquery.min.js',  array(), '1.0.0', true );
	wp_enqueue_script( 'modernizr',  get_template_directory_uri().'/assets/js/modernizr.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'waypoints',  get_template_directory_uri().'/assets/js/waypoints.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js',  get_template_directory_uri().'/assets/js/bootstrap.min.js',  array('jquery'), '1.0.0', true );


	wp_enqueue_script( 'plugins-js',  get_template_directory_uri().'/assets/js/plugins.js',  array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'scrollUp',  get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'maps',  get_template_directory_uri().'/https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'gmaps',  get_template_directory_uri().'/assets/js/gmaps.js',  array('jquery'), '1.0.0', true );




	wp_enqueue_script( 'fancybox-js',  get_template_directory_uri().'/assets/js/jquery.fancybox.min.js',  array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'magnific-popup-js',  get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'isotope',  get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',  array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'counterup',  get_template_directory_uri().'/assets/js/counterup.min.js',  array('jquery'), '1.0.0', true );


	wp_enqueue_script( 'oul-carousel-js',  get_template_directory_uri().'/assets/js/owl.carousel.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'wow-js',  get_template_directory_uri().'/assets/js/wow.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'lettering',  get_template_directory_uri().'/assets/js/jquery.lettering.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'textillate',  get_template_directory_uri().'/assets/js/jquery.textillate.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mixitup',  get_template_directory_uri().'/assets/js/mixitup.js',  array('jquery'), '1.0.0', true );



	wp_enqueue_script( 'chart',  get_template_directory_uri().'/assets/js/chart.js',  array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'chart-active',  get_template_directory_uri().'/assets/js/chart-active.js',  array('jquery'), '1.0.0', true );


	wp_enqueue_script( 'themepunch',  get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js',  array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'revolution',  get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js',  array('jquery'), '1.0.0', true );
	// slider revolution 5.0 extensions  

	wp_enqueue_script( 'extension',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js',  array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'kenburn',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'layeranimation',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'migration',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'navigation',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'parallax',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slideanims',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'video',  get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js',  array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'custom',  get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0.0', true );


	}

add_action('wp_enqueue_scripts', 'resources_css_js');

/*----------------------------
	2. Google Fonts
------------------------------*/
function consult_fonts_url() {
	$fonts_url = '';
	$OpenSans = _x( 'on', 'Open+Sans font: on or off', 'consult' );
	$Montserrat = _x( 'on', 'Montserrat font: on or off', 'consult' );


if ( 'off' !== $OpenSans || 'off' !== $Montserrat ) {


	$font_families = array();
	if ( 'off' !== $OpenSans ) {
	$font_families[] = 'Open+Sans:300i,400,400i,600,700,800%';
	}

	if ( 'off' !== $Montserrat ) {
	$font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
	}


	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' =>  urlencode( 'latin,latin-ext, greek,greek-ext, cyrillic, cyrillic-ext, vietnames' ),
	);
		

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	}

	return esc_url_raw( $fonts_url);
}


// Adding Google fonts to the editor
function consult_editor_styles() {

	$OpenSans =( array( 'editor-style.css','//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%' ) );

	$Montserrat =( array( 'editor-style.css','//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900' ) );


	add_editor_style( array( $OpenSans, $Montserrat ) );
}

	add_action( 'after_setup_theme', 'consult_editor_styles' );




//Adding fonts to the Custom Header screen


function consult_custom_header_fonts() {
wp_enqueue_style( 'OpenSans-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%', array(), null );

wp_enqueue_style( 'Montserrat-fonts', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900', array(), null );



}
add_action( 'admin_print_styles-appearance_page_custom-header', 'consult_custom_header_fonts' );
