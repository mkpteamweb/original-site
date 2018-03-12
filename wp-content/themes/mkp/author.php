<?php
/**
 * Archive: Blog
 *
 * @package MKP
 * @since 0.1.0
 */
include_once(get_template_directory().'/include-page-meta.php');

get_header(); ?>

<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

<div id="content-bounds">

	<div id="blog-content" class="tinymce">

		<p class="archive-title">author archives: <?php echo $curauth->nickname; ?></p>

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