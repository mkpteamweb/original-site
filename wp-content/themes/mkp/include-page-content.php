<?php
/**
 * Page Meta
 *
 * @package MKP
 * @since 0.1.0
 */

// get template
$template = basename( get_page_template() );

?>

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

	<?php if ($has_children) { ?>
	<aside id="sidebar">
		<nav id="nav-secondary">
			<ul>
				<li class="<?php if ($post->ID == $ancestor) { echo "current_page_item"; } ?>"><a href="<?php echo get_permalink($ancestor); ?>"><?php echo get_the_title($ancestor); ?></a></li>
				<?php wp_list_pages(array('depth'=>1, 'child_of'=>$ancestor, 'title_li'=>'')); ?>
			</ul>
		</nav>
	</aside>
	<?php } ?>

	<?php
		$mobile_image = get_post_meta($post->ID, '_page_mobile_image', true);
		if ($mobile_image) {
			$mobile_image_resized = wpx::resize($mobile_image, 700, 300, true);
			echo '<img class="mobile-image" src="'.$mobile_image_resized['url'].'" alt="">';
		}
	?>

	<div class="tinymce">
		<?php the_content(); ?>

		<?php 
			if ($template == "page-contact.php") {
				include_once(get_template_directory().'/include-page-contact.php');
			}
		?>
	</div>

</div>