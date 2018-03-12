<?php
/**
 * Single: Blog
 *
 * @package MKP
 * @since 0.1.0
 */
include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<?php the_post(); ?>

<div id="content-bounds">

	<div id="blog-content" class="tinymce">
	
		<p class="archive-title"><a href="<?php bloginfo('url'); ?>/blog/">&laquo; Back to Blog</a></p>

		<h1 class="blog-title"><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<p class="post-info">This entry was posted in <?php echo get_the_category_list( ', '); ?> on <?php the_date(); ?> by <?php the_author_posts_link(); ?>.</p>

	</div>

	<div id="blog-sidebar">

		<?php dynamic_sidebar("blog"); ?>

	</div>


</div>

<?php get_footer();