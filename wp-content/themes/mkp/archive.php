<?php
/**
 * Archive: Blog
 *
 * @package MKP
 * @since 0.1.0
 */
include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<div id="content-bounds">

	<div id="blog-content" class="tinymce">

		<?php if ( is_day() ) : ?>
			<p class="archive-title">daily archives: <?php echo get_the_date() ?></p>
		<?php elseif ( is_month() ) : ?>
			<p class="archive-title">monthly archives: <?php echo get_the_date( 'F Y' ); ?></p>
		<?php elseif ( is_year() ) : ?>
			<p class="archive-title">yearly archives: <?php echo get_the_date( 'Y' ); ?></p>
		<?php elseif ( is_category() ) : ?>
			<p class="archive-title">category archives: <?php single_cat_title(); ?></p>
		<?php elseif ( is_tag() ) : ?>
			<p class="archive-title">tag archives: <?php single_tag_title(); ?></p>
		<?php else : ?>
			<p class="archive-title">archives</p>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>
			<div class="blog-archive">
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="blog-post">
					<h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php wp_pagenavi(); ?>

	</div>

	<div id="blog-sidebar">

		<?php dynamic_sidebar("blog"); ?>

	</div>

</div>

<?php get_footer();