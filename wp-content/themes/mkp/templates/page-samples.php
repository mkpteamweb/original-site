<?php
/**
 * Page: Samples
 *
 * Template Name: Samples
 * 
 * @package MKP
 * @since 0.1.0
 */
include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<?php the_post(); ?>

<?php if ($background_image) { ?><div id="samples-container"><div id="flavor-graphic" <?php
	if ($background_image_position || $background_image_position_left || $background_image_position_right) {
		echo 'style="';
		if ($background_image_position) echo 'top: '.$background_image_position.'px;';
		if ($background_image_position_left) echo 'left: '.$background_image_position_left.'px;';
		if ($background_image_position_right) echo 'right: '.$background_image_position_right.'px;';
		echo '"';
	}
?>><img src="<?php echo  $background_image; ?>" alt=""></div></div><?php } ?>

<section class="section grid team">
	<h1 class="screenreader">Samples of Our Work</h1>
	<div class="grid-container">

		<?php 
			$attached_samples = get_post_meta($post->ID, "_page_samples", true);
			if ($attached_samples) {
				$attached_samples = explode(',',$attached_samples);
				foreach($attached_samples as $attached_sample) {
					$page = get_post($attached_sample);
					$thumbnail = get_post_meta($page->ID, '_samples_thumbnail', true);
					$subtitle = get_post_meta($page->ID, '_samples_subtitle', true);
					$under_construction = get_post_meta($page->ID, '_samples_under_construction', true);
					$alternate_title = get_post_meta($page->ID, '_samples_alternate_title', true);
					$turn_off_title = get_post_meta($page->ID, '_samples_title_off', true);
					$download_title = get_post_meta($page->ID, '_samples_download_title', true);
					if ($thumbnail) {
						$thumbnail_resized = wpx::resize($thumbnail, 600, 600, true);
					}
					$external_file = get_post_meta($page->ID, '_samples_attached_file', true);
					if ($external_file) { $has_file = $external_file; } else { $has_file = false; }
					$has_video = false;
					$video_path = false;
					include(get_template_directory().'/include-grid-item.php');
				}
			}
		?>

		<br class="clear">
	</div>
</section>

<?php get_footer();