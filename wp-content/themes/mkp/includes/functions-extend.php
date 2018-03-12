<?php
/**
* Functions: Utility
*
* @package    WordPress
* @subpackage MKP
* @since 1.0
*/

/*
|--------------------------------------------------------------------------
/**
 * Filter Video Shortcode
 *
 * @since 1.0
 *
 */
function wpx_body_class($classes) {

	global $post;
	$full_width = get_post_meta($post->ID, '_samples_full_width_layout', true);
	$template = false;
	if ($post) $template = basename(get_page_template_slug( $post->ID ));

	// homepage slide
	if ($template == 'page-samples.php' || $template == 'page-samples.php' || $template == 'page-full-width.php' || $template == 'page-team.php' || is_404() || $full_width) {
		$classes[] = 'full-width';
	}

	if (is_singular('post') || is_page_template("templates/page-blog.php") || is_archive()) {
		$classes[] = 'blog-section';
	}

	return $classes;
}

add_filter('body_class','wpx_body_class');

/*
|--------------------------------------------------------------------------
/**
 * Filter Video Shortcode
 *
 * @since 1.0
 *
 */
function wpx_flex_videos($html, $url, $attr) {

	return '<div class="video">'.$html.'</div>';

}
add_filter('embed_oembed_html', 'wpx_flex_videos', 10, 3);

/*
|--------------------------------------------------------------------------
/**
 * Extend Excerpts with Ellipsis
 *
 * Changes the [...] ellipsis after get_excerpt() and the_excerpt() output and
 * allows for the inclusion of a link to the post. 
 *
 * @since 1.0
 */

function wpx_excerpt_ellipsis() {
	return '&nbsp;&hellip; <a href="'. get_permalink() . '">' . 'Read More'. '</a>';
}

// alters automatically generated excerpt
function wpx_auto_excerpt( $more ) {
	return ' &hellip;' . wpx_excerpt_ellipsis();
}
add_filter( 'excerpt_more', 'wpx_auto_excerpt' );

// alters the get_the_excerpt() output
function wpx_get_excerpt( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= wpx_excerpt_ellipsis();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'wpx_get_excerpt' );

define('FILTERPRIORITY', 10);
add_filter('the_content', 'do_shortcode', FILTERPRIORITY);
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop', 100 );

?>