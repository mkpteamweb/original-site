<?php
/**
 * Page: Team
 *
 * Template Name: Team Layout
 * 
 * @package MKP
 * @since 0.1.0
 */
include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<?php the_post(); ?>

<section class="section grid team">
	<h1 class="screenreader">About the MKP Team</h1>
	<div class="grid-container">

		<?php 
			$args = array(
				'post_type' => 'team',
				'posts_per_page' => -1,
				'order' => 'ASC',
				'orderby' => 'menu_order'
			);
			$all_pages = get_pages($args);

			foreach($all_pages as $page) {
				$has_video = get_post_meta($page->ID, '_team_has_video', true);
				$video_path = get_post_meta($page->ID, '_team_video_path', true);
				$thumbnail = get_post_meta($page->ID, '_team_thumbnail', true);
				$subtitle = get_post_meta($page->ID, '_team_subtitle', true);
				$under_construction = get_post_meta($page->ID, '_team_under_construction', true);
				$alternate_title = get_post_meta($page->ID, '_team_alternate_title', true);
				$turn_off_title = false;
				$download_title = false;
				if ($thumbnail) {
					$thumbnail_resized = wpx::resize($thumbnail, 600, 600, true);
				}
				$has_file = false;
				include(get_template_directory().'/include-grid-item.php');
			}
		?>

		<br class="clear">
	</div>
</section>

<?php get_footer();