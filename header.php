<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pieper Cafe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Pieper Cafe' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<section class="location-hours">

			<p><a href="http://goo.gl/WsOo5c" target="_blank">6504 SE Foster Rd. Portland, OR 97206</a> / <a href="tel:9712717471">971.271.7471</a></p>
			<p>M-F: 7am&mdash;4pm / Sat-Sun: 8am&mdash;4pm</p>

		</section>

		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pieper_logo.jpg" />
			</a>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
