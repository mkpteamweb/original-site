<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage DMB
 * @since 1.0
 */

// icons
$facebook = wpx::get_option_meta('theme_options', "facebook_url");
$linkedin = wpx::get_option_meta('theme_options', "linkedin_url");
$google = wpx::get_option_meta('theme_options', "google_url");
$twitter = wpx::get_option_meta('theme_options', "twitter_url");
$blog = wpx::get_option_meta('theme_options', "blog_url");

?>

		<footer id="footer-main">

			<div id="footer-main-inner">
				<div class="container">
					<div class="credits">
						<?php echo wpx::get_option_meta('theme_options', "copyright_info"); ?> 
						<?php echo wpx::get_option_meta('theme_options', "phone_number"); ?> 
						<span class="pipe">|</span> 
						<a href="<?php echo wpx::get_option_meta('theme_options', 'contact_page', true); ?>">Contact MKP</a> 
						<span class="pipe">|</span> 
					</div>
					<div class="social">
						<span>Follow MKP</span>
						<div class="social-icons">
							<?php if ($facebook) { ?><a target="_blank" href="<?php echo $facebook; ?>" class="icon-facebook"><i class="icon-facebook"></i></a><?php } ?>
							<?php if ($linkedin) { ?><a target="_blank" href="<?php echo $linkedin; ?>" class="icon-linkedin"><i class="icon-linkedin"></i></a> <?php } ?>
							<?php if ($google) { ?><a target="_blank" href="<?php echo $google; ?>" class="icon-gplus"><i class="icon-gplus"></i></a><?php } ?>
							<?php if ($twitter) { ?><a target="_blank" href="<?php echo $twitter; ?>" class="icon-twitter"><i class="icon-twitter"></i></a><?php } ?>
							<?php if ($blog) { ?><a target="_blank" href="<?php echo $blog; ?>" class="icon-rss"><i class="icon-rss"></i></a><?php } ?>
						</div>
					</div>
				</div>
			</div>

		</footer>

	</div>

	<div class="modal" id="video-frame">
		<div class="content">
			<a class="close switch" gumby-trigger="|#video-frame"><i class="icon-cancel"></i></a>
			<div class="video"><iframe src="#" width="800" height="600" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
		</div>
	</div>

	<script src="/wp-content/themes/mkp/assets/js/app.min.js"></script>

	<script>var SITE_ROOT = '<?php bloginfo('url'); ?>';</script>
	<script>var SITE_ASSETS = '<?php bloginfo('template_url'); ?>';</script>

	<!--[if lte IE 9]>
		<script src="/wp-content/themes/mkp/assets/js/libraries/jquery.placeholder.js"></script>
		<script>
		$(document).ready(function() {
			$('input, textarea').placeholder();
		});
		</script>
	<![endif]-->

	<?php wp_footer(); ?>

</body>
</html>