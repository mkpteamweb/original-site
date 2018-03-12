<?php
/**
 * Page: Blog
 *
 * Template Name: Blog
 * 
 * @package MKP
 * @since 0.1.0
 */
include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<?php 
	$parameters = array(
		'posts_per_page'=>5,
		'post_type'=>'post',
		'paged' => get_query_var('paged')
	);
	$blog_query = new WP_Query($parameters);
?>

<div id="content-bounds">

	<div id="blog-content" class="tinymce">

		<p class="archive-title"><a href="<?php bloginfo('url'); ?>">&laquo; Home</a></p>

		<?php if ( $blog_query->have_posts() ) { ?>
			<div class="blog-archive">
			<?php while ( $blog_query->have_posts() ) { ?>
				<?php $blog_query->the_post(); ?>

				<div class="blog-post">
					<h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content('Read More &raquo;'); ?>
				</div>

			<?php } ?>
			</div>
		<?php } ?>

		<?php wp_pagenavi(array("query"=>$blog_query)); ?>

	</div>

	<div id="blog-sidebar">

		<?php dynamic_sidebar("blog"); ?>

	</div>


</div>

<?php get_footer();