<?php
/**
* Setup
*
* @package WordPress
* @subpackage DMB
* @since 1.0
*/

/*
|--------------------------------------------------------------------------
 * Sandbox Setup
|--------------------------------------------------------------------------
*/
function mkp_setup() {

	// set a content width if you haven't in the Dashboard
	// http://codex.wordpress.org/Content_Width
	if ( ! isset( $content_width ) ) $content_width = 1100;

	/*
	|--------------------------------------------------------------------------
	 * Theme Support
	|--------------------------------------------------------------------------
	*/

	// enable feed links
	add_theme_support( 'automatic-feed-links' );
	
	// enable excerpt meta box for Pages
	// (this only applies to default post types)
	add_post_type_support('page', 'excerpt');

	/*
	|--------------------------------------------------------------------------
	 * Misc
	|--------------------------------------------------------------------------
	*/

	// hide version #
	remove_action('wp_head', 'wp_generator');

	// disable the Page columns automatically added by WP SEO by Yoast
	add_filter( 'wpseo_use_page_analysis', '__return_false' );

	/*
	|--------------------------------------------------------------------------
	 * Register Custom Menus
	|--------------------------------------------------------------------------
	*/
	register_nav_menus( array(
		'primary' => 'Primary'
	) );

	/*
	|--------------------------------------------------------------------------
	 * Register Sidebars
	|--------------------------------------------------------------------------
	*/
	$sidebars['blog'] = array(
		'name'          => __( 'Blog Sidebar', 'wpx' ),
		'id'            => 'blog',
		'description'   => 'Sidebar used for the Blog section.',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	);

	foreach ( (array) $sidebars as $sidebar ) {
		register_sidebar( $sidebar );
	}

}

add_action( 'after_setup_theme', 'mkp_setup' );

/*
|--------------------------------------------------------------------------
 * Include Functions
|--------------------------------------------------------------------------
*/
include_once('includes/functions-dashboard.php');
include_once('includes/functions-extend.php');
include_once('includes/functions-utility.php');