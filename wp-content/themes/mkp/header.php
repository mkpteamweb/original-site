<?php
/**
 * The Header for our theme.
 *
 * @package MKP
 * @since 0.1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>

		<title><?php wp_title(' - '); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="icon" href="/favicon.png">
		<!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
		<meta name="msapplication-TileColor" content="#ff1676">
		<meta name="msapplication-TileImage" content="/tileicon.png">

		<link rel="stylesheet" href="/wp-content/themes/mkp/assets/styles/screen.css">
		<!--[if lte IE 9]><script src="/wp-content/themes/mkp/assets/js/libraries/respond.js"></script><![endif]-->
		<script src="/wp-content/themes/mkp/assets/js/libraries/modernizr-2.6.2.min.js"></script>

		<?php wp_head(); ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-58675297-1', 'auto');
			ga('send', 'pageview');
		</script>

</head>

<body <?php body_class(); ?>>

	<div class="loading-screen"><div class="loading-logo"></div><div class="loading-gif"></div></div>

	<div id="bounds">

		<?php if (is_singular('post') || is_page_template("templates/page-blog.php") || is_archive()) { ?>
		<div id="header-banner">
			<?php
				global $post;
				// default banner
				$banner_url = wpx::get_option_meta('theme_options', 'blog_banner');
				// if singular, use the post's
				if (is_singular('post') && get_post_meta($post->ID, "_post_blog_banner", true)) {
					$banner_url = get_post_meta($post->ID, "_post_blog_banner", true);
				}
			?>
			<div class="backstretch-container" data-image="<?php echo $banner_url; ?>"></div>
		</div>
		<?php } ?>

		<header id="header-main">
			<?php if (is_home()) { ?>
			<div class="tagline">
				<div class="tagline-inner">
					<h2><?php echo wpx::get_option_meta('theme_options', 'homepage_heading'); ?>:</h2>
					<h3>Premier financial services marketing <br> and merger communications</h3>
				</div>
			</div>
			<?php } ?>
			<div id="header-main-outer">
				<div id="header-main-inner">
					<ul id="mobile-menu">
						<li><a href="<?php echo get_bloginfo('url'); ?>"><span>Home</span><b class='bg'></b></a></li>
						<?php
							// exclude specific pages
							$exclusions = wpx::get_option_meta('theme_options', 'exclusions');
							$exclude_ids = $exclusions;
						?>
						<?php wp_list_pages( array('depth'=>1, 'title_li'=>'', "sort_column"=>"menu_order", "link_before"=>"<span>", "link_after"=>"</span><b class='bg'></b>", "exclude"=>$exclusions ) ); ?>
					</ul>
					<div id="header-right">
						<h1 id="logo-main"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"></a></h1>
					</div>
					<?php if (!is_home()) { ?>
					<nav id="nav-primary">
						<h1><a href="#"><i class="icon-menu"></i> Explore</a></h1>
					</nav>
					<?php } ?>
					<br class="clear">
					<?php 
						$ancestor_id = wpx::get_ancestor_id($post);
						$children = get_children(array("post_parent"=>$ancestor_id, 'post_type'=>'page'));
						if ($children) {
					 ?>
					<div id="header-subpages" class="field">
						<div class="picker">
							<select id="submenu-picker">
								<option value="">more in <?php echo get_the_title($ancestor_id); ?>...</option>
								<?php foreach($children as $child) { ?>
									<option value="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</header>

		<div id="bounds-inner">