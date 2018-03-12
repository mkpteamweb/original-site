<?php
/**
 * The main template file
 *
 * @package MKP
 * @since 0.1.0
 */
 get_header(); ?>

<section class="section grid">
	<h1 class="screenreader">Learn More about MKP Communications</h1>
	<div class="grid-container">

		<?php 
			// exclude specific pages
			$exclusions = wpx::get_option_meta('theme_options', 'exclusions');
			$exclude_ids = $exclusions;

			$args = array(
				'exclude'=>$exclusions,
				'sort_order' => 'ASC',
				'sort_column' => 'menu_order',
				'parent'=>0
			);
			$all_pages = get_pages($args);

			foreach($all_pages as $page) {
				$has_video = get_post_meta($page->ID, '_page_has_video', true);
				$video_path = get_post_meta($page->ID, '_page_video_path', true);
				$thumbnail = get_post_meta($page->ID, '_page_thumbnail', true);
				$subtitle = get_post_meta($page->ID, '_page_subtitle', true);
				$under_construction = get_post_meta($page->ID, '_page_under_construction', true);
				$alternate_title = get_post_meta($page->ID, '_page_alternate_title', true);
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