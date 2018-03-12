<?php
/**
 * All Pages
 *
 * @package MKP
 * @since 0.1.0
 */

include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<?php the_post(); ?>

<div id="content-bounds">

	<?php if ($background_image) { ?><div id="flavor-graphic" <?php
		if ($background_image_position || $background_image_position_left || $background_image_position_right) {
			echo 'style="';
			if ($background_image_position) echo 'top: '.$background_image_position.'px;';
			if ($background_image_position_left) echo 'left: '.$background_image_position_left.'px;';
			if ($background_image_position_right) echo 'right: '.$background_image_position_right.'px;';
			echo '"';
		}
	?>><img src="<?php echo  $background_image; ?>" alt=""></div><?php } ?>

	<div id="content">

		<h1 class="page-title"><?php if ($alternate_title) { echo $alternate_title; } else { the_title(); } ?></h1>

		<?php
			$parent_page_meta = get_post_meta($post->ID, "_samples_parent_page", true);
			if ($parent_page_meta) { 
				$parent_page = get_post($parent_page_meta);
			} else {
				$parent_page = false;
			}
			if ($parent_page) { 
		?>

		<aside id="sidebar">
			<nav id="nav-secondary">
				<ul>
					<li><a href="<?php echo get_permalink($parent_page->ID); ?>">&laquo; back to <?php echo get_the_title($parent_page->ID); ?></a></li>
				</ul>
			</nav>
		</aside>

		<?php } ?>

		<?php
			$mobile_image = get_post_meta($post->ID, '_samples_mobile_image', true);
			if ($mobile_image) {
				$mobile_image_resized = wpx::resize($mobile_image, 700, 300, true);
				echo '<img class="mobile-image" src="'.$mobile_image_resized['url'].'" alt="">';
			}
		?>

		<div class="tinymce">

			<?php the_content(); ?>

		</div>

	</div>

</div>

<?php get_footer();