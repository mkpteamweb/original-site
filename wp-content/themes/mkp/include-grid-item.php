<?php
/**
 * Grid
 *
 * @package MKP
 * @since 0.1.0
 */
?>

<article data-which="tile-<?php echo $page->ID; ?>" class="grid-item <?php if ($has_video && $video_path) { ?>switch video-type<?php } ?><?php if ($under_construction) { ?> under-construction<?php } ?>" <?php if ($has_video && $video_path) { ?>gumby-trigger="#video-frame" data-video="<?php echo $video_path; ?>"<?php } ?>>
	<div class="live-tile" data-mode="flip">
		<div class="unflipped-state">
			<?php if (is_page_template("templates/page-samples.php") && !$has_file) { ?><a href="<?php echo get_permalink($page->ID); ?>" class="grid-item-link"><?php } ?>
			<?php if ($thumbnail) { ?><img src="<?php echo $thumbnail_resized['url']; ?>" class="full" alt=""><?php } else { ?><img class="full" src="<?php echo bloginfo('template_url') ?>/assets/images/blank.png" alt=""><?php } ?>
			<?php if ($turn_off_title) { ?><?php } else { ?><span class="tile-title grid-item-title <?php if ($has_file) { ?>green<?php } ?>"><?php if (is_page_template("templates/page-samples.php") && !$has_file) { ?><span><?php } ?><?php if ($alternate_title) { echo $alternate_title; } else { echo get_the_title($page->ID); } ?><?php if (is_page_template("templates/page-samples.php") && !$has_file) { ?></span><?php } ?></span><?php } ?>
			<?php if (is_page_template("templates/page-samples.php") && !$has_file) { ?></a><?php } ?>
		</div>
		<div class="flipped-state">
			<?php if ($has_video && $video_path) { ?>
			<a href="#" class="grid-item-overlay">
				<h2 class="grid-item-slogan"><span>watch the video</span></h2>
			</a>
			<?php } elseif ($has_file) { ?>
			<a href="<?php echo $has_file; ?>" target="_blank" class="grid-item-overlay">
				<h2 class="grid-item-slogan"><span><?php if ($download_title) { echo $download_title; } else { echo "view pdf"; } ?></span></h2>
			</a>
			<?php } else { ?>
			<a href="<?php if ($under_construction) { echo '#'; } else { echo get_permalink($page->ID); } ?>" class="grid-item-overlay">
				<?php if ($under_construction) { ?><?php } else { ?><h2 class="tile-title grid-item-slogan"><span><?php echo $subtitle; ?></span></h2><?php } ?>
			</a>
			<?php } ?>
		</div>
		<img class="positioner" src="<?php echo bloginfo('template_url') ?>/assets/images/blank.png" alt="">
	</div>
</article>