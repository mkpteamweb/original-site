<?php
/**
 * Page Meta
 *
 * @package MKP
 * @since 0.1.0
 */

if (is_singular('page')) { 
	$ancestor = wpx::get_ancestor_id();
	$has_children = get_pages('child_of='.$ancestor);
	$background_image = get_post_meta($post->ID, '_page_background_image', true);
	$background_image_position = get_post_meta($post->ID, '_page_background_image_position', true);
	$background_image_position_left = get_post_meta($post->ID, '_page_background_image_position_left', true);
	$background_image_position_right = get_post_meta($post->ID, '_page_background_image_position_right', true);
	$alternate_title = get_post_meta($post->ID, '_page_alternate_page_heading', true);
	if (!$background_image_position) $background_image_position = 0;
} else {
	// for samples
	$background_image = get_post_meta($post->ID, '_samples_background_image', true);
	$background_image_position = get_post_meta($post->ID, '_page_background_image_position', true);
	$background_image_position_left = get_post_meta($post->ID, '_page_background_image_position_left', true);
	$background_image_position_right = get_post_meta($post->ID, '_page_background_image_position_right', true);
	$alternate_title = get_post_meta($post->ID, '_samples_alternate_page_heading', true);
}


?>