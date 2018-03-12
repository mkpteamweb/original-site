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

				<?php include_once(get_template_directory().'/include-page-content.php'); ?>

			</div>

<?php get_footer();