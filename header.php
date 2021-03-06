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

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=448978381816922&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

<div class="container">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Pieper Cafe' ); ?></a>

	<section class="main-content">

		<header id="masthead" class="site-header" role="banner">

			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pieper_logo.jpg" />
				</a>
			</div><!-- .site-branding -->

			<hr />

			<section class="location-hours">

				<div class="hours-container">
					<div class="hours-row">
						<span class="hours-days">Monday to Friday</span>
						<span class="hours-times">7AM to 4PM</span>
					</div>
					<div class="hours-row">
						<span class="hours-days">Saturday and Sunday</span>
						<span class="hours-times">8AM to 4PM</span>
					</div>
				</div>

				<hr />

				<div class="cafe-location">

					<address><a href="http://goo.gl/WsOo5c" target="_blank">6504 SE Foster Rd.<br>Portland, OR 97206</a></address>
					<p><a href="tel:9712717471">971.271.7471</a></p>

					<a href="mailto:info@piepercafe.com">info@piepercafe.com</a>

				</div>

				<hr />

				<div class="serving-stumptown">
					<h4>Proudly Serving</h4>
					<a href="http://stumptowncoffee.com/" target="_blank">
						<?xml version="1.0" encoding="UTF-8" standalone="no"?>
						<svg width="334px" height="86px" viewBox="0 0 334 86" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
						    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
						        <g id="stumptown_logo" sketch:type="MSLayerGroup" fill="#4E2F12">
						            <g sketch:type="MSShapeGroup">
						                <g transform="translate(24.000000, 67.000000)">
						                    <g id="Group">
						                        <path d="M16.8,8.2 L14.6,8.2 L14.6,6.6 C13.7,4.9 11.7,3.7 9.6,3.7 C6.6,3.7 4.3,6.4 4.3,9.9 C4.3,13.5 6.6,16.1 9.9,16.1 C12.1,16.1 13.6,15.3 15.3,13.1 L17,14.6 C14.9,17.5 12.9,18.6 9.4,18.6 C6.8,18.6 4.9,17.9 3.4,16.3 C1.9,14.7 1,12.3 1,10 C1,5.1 4.8,1.1 9.4,1.1 C11.5,1.1 13.1,1.8 14.6,3.2 L14.6,1.4 L16.8,1.4 L16.8,8.2 L16.8,8.2 Z"></path>
						                        <path d="M9.5,18.9 C6.8,18.9 4.9,18.2 3.3,16.5 C1.8,14.9 0.8,12.3 0.8,10 C0.8,5 4.7,0.9 9.4,0.9 C11.3,0.9 12.9,1.5 14.4,2.7 L14.4,1.3 L17.1,1.3 L17.1,8.5 L14.4,8.5 L14.4,6.7 C13.5,5.1 11.6,4 9.7,4 C6.8,4 4.6,6.5 4.6,9.9 C4.6,13.4 6.8,15.9 9.9,15.9 C12,15.9 13.5,15.1 15.1,13 L15.3,12.8 L17.4,14.7 L17.3,14.9 C15.2,17.8 13,18.9 9.5,18.9 L9.5,18.9 L9.5,18.9 Z M1.3,10.1 C1.3,12.3 2.2,14.7 3.6,16.2 C5,17.7 6.8,18.4 9.4,18.4 C12.7,18.4 14.6,17.4 16.6,14.7 L15.3,13.5 C13.6,15.6 12.1,16.4 9.9,16.4 C6.5,16.4 4,13.7 4,9.9 C4,6.3 6.5,3.4 9.6,3.4 C11.8,3.4 13.9,4.6 14.8,6.4 L14.8,6.5 L14.8,7.8 L16.4,7.8 L16.4,1.7 L14.8,1.7 L14.8,3.9 L14.3,3.5 C13,2.1 11.4,1.5 9.4,1.5 C4.9,1.5 1.3,5.4 1.3,10.1 Z"></path>
						                    </g>
						                    <g transform="translate(21.000000, 0.000000)">
						                        <path d="M17.7,10 C17.7,15 14,18.7 9,18.7 C4,18.7 0.3,15 0.3,10 C0.3,5 4,1.3 9,1.3 C13.9,1.2 17.7,5 17.7,10 L17.7,10 L17.7,10 Z M3.6,10 C3.6,13.7 5.8,16.2 9,16.2 C12.2,16.2 14.4,13.7 14.4,10 C14.4,6.3 12.2,3.8 9,3.8 C5.8,3.8 3.6,6.3 3.6,10 L3.6,10 L3.6,10 Z"></path>
						                        <path d="M9,18.9 C3.9,18.9 0.1,15 0.1,9.9 C0.1,4.8 3.9,0.9 9,0.9 C14.1,0.9 17.9,4.8 17.9,9.9 C17.9,15.1 14.1,18.9 9,18.9 L9,18.9 L9,18.9 Z M9,1.5 C4.2,1.5 0.6,5.1 0.6,9.9 C0.6,14.7 4.2,18.4 9,18.4 C13.8,18.4 17.4,14.8 17.4,9.9 C17.4,5.1 13.8,1.5 9,1.5 L9,1.5 L9,1.5 Z M9,16.4 C5.7,16.4 3.3,13.7 3.3,9.9 C3.3,6.1 5.6,3.4 9,3.4 C12.3,3.4 14.7,6.1 14.7,9.9 C14.7,13.8 12.4,16.4 9,16.4 L9,16.4 L9,16.4 Z M9,4 C5.9,4 3.9,6.4 3.9,9.9 C3.9,13.5 6,15.8 9,15.8 C12.1,15.8 14.1,13.4 14.1,9.9 C14.1,6.4 12.1,4 9,4 L9,4 L9,4 Z"></path>
						                    </g>
						                    <g transform="translate(42.000000, 1.000000)">
						                        <path d="M14.7,5.6 L11.9,5.6 L11.9,3 L5.8,3 L5.8,7.4 L10.4,7.4 L10.4,9.8 L5.8,9.8 L5.8,15.1 L8.2,15.1 L8.2,17.4 L0.7,17.4 L0.7,15 L2.7,15 L2.7,2.9 L0.7,2.9 L0.7,0.6 L14.6,0.6 L14.6,5.6 L14.7,5.6 L14.7,5.6 Z"></path>
						                        <path d="M8.5,17.6 L0.5,17.6 L0.5,14.7 L2.5,14.7 L2.5,3.1 L0.5,3.1 L0.5,0.2 L15,0.2 L15,5.7 L11.7,5.7 L11.7,3.1 L6.1,3.1 L6.1,6.9 L10.7,6.9 L10.7,9.9 L6.1,9.9 L6.1,14.6 L8.5,14.6 L8.5,17.6 L8.5,17.6 Z M1,17.1 L7.9,17.1 L7.9,15.3 L5.5,15.3 L5.5,9.5 L10.1,9.5 L10.1,7.6 L5.5,7.6 L5.5,2.7 L12.2,2.7 L12.2,5.3 L14.4,5.3 L14.4,0.9 L1,0.9 L1,2.7 L3,2.7 L3,15.3 L1,15.3 L1,17.1 L1,17.1 Z"></path>
						                    </g>
						                    <g transform="translate(61.000000, 1.000000)">
						                        <path d="M14.9,5.6 L12.1,5.6 L12.1,3 L6,3 L6,7.4 L10.6,7.4 L10.6,9.8 L6,9.8 L6,15.1 L8.4,15.1 L8.4,17.4 L1,17.4 L1,15 L3,15 L3,2.9 L1,2.9 L1,0.6 L14.9,0.6 L14.9,5.6 L14.9,5.6 Z"></path>
						                        <path d="M8.7,17.6 L0.7,17.6 L0.7,14.7 L2.7,14.7 L2.7,3.1 L0.7,3.1 L0.7,0.2 L15.1,0.2 L15.1,5.7 L11.8,5.7 L11.8,3.1 L6.2,3.1 L6.2,6.9 L10.8,6.9 L10.8,9.9 L6.2,9.9 L6.2,14.6 L8.6,14.6 L8.6,17.6 L8.7,17.6 L8.7,17.6 Z M1.2,17.1 L8.1,17.1 L8.1,15.3 L5.7,15.3 L5.7,9.5 L10.3,9.5 L10.3,7.6 L5.7,7.6 L5.7,2.7 L12.4,2.7 L12.4,5.3 L14.6,5.3 L14.6,0.9 L1.2,0.9 L1.2,2.7 L3.2,2.7 L3.2,15.3 L1.2,15.3 L1.2,17.1 L1.2,17.1 Z"></path>
						                    </g>
						                    <g transform="translate(80.000000, 1.000000)">
						                        <path d="M15.1,5.6 L12.3,5.6 L12.3,3 L6.2,3 L6.2,7.4 L10.8,7.4 L10.8,9.8 L6.2,9.8 L6.2,15.1 L12.6,15.1 L12.6,12.1 L15.4,12.1 L15.4,17.4 L1.2,17.4 L1.2,15 L3.2,15 L3.2,2.9 L1.2,2.9 L1.2,0.6 L15.1,0.6 L15.1,5.6 L15.1,5.6 Z"></path>
						                        <path d="M15.6,17.6 L0.9,17.6 L0.9,14.7 L2.9,14.7 L2.9,3.1 L0.9,3.1 L0.9,0.2 L15.4,0.2 L15.4,5.7 L12,5.7 L12,3.1 L6.4,3.1 L6.4,6.9 L11,6.9 L11,9.9 L6.4,9.9 L6.4,14.6 L12.3,14.6 L12.3,11.6 L15.6,11.6 L15.6,17.6 L15.6,17.6 Z M1.4,17.1 L15.1,17.1 L15.1,12.3 L12.9,12.3 L12.9,15.3 L6,15.3 L6,9.5 L10.6,9.5 L10.6,7.6 L6,7.6 L6,2.7 L12.7,2.7 L12.7,5.3 L14.9,5.3 L14.9,0.9 L1.5,0.9 L1.5,2.7 L3.5,2.7 L3.5,15.3 L1.5,15.3 L1.5,17.1 L1.4,17.1 L1.4,17.1 Z"></path>
						                    </g>
						                    <g transform="translate(100.000000, 1.000000)">
						                        <path d="M15,5.6 L12.2,5.6 L12.2,3 L6.1,3 L6.1,7.4 L10.7,7.4 L10.7,9.8 L6.1,9.8 L6.1,15.1 L12.5,15.1 L12.5,12.1 L15.3,12.1 L15.3,17.4 L1,17.4 L1,15 L3,15 L3,2.9 L1,2.9 L1,0.6 L15,0.6 L15,5.6 L15,5.6 Z"></path>
						                        <path d="M15.5,17.6 L0.8,17.6 L0.8,14.7 L2.8,14.7 L2.8,3.1 L0.8,3.1 L0.8,0.2 L15.3,0.2 L15.3,5.7 L12,5.7 L12,3.1 L6.4,3.1 L6.4,6.9 L11,6.9 L11,9.9 L6.4,9.9 L6.4,14.6 L12.3,14.6 L12.3,11.6 L15.6,11.6 L15.6,17.6 L15.5,17.6 L15.5,17.6 Z M1.3,17.1 L15,17.1 L15,12.3 L12.8,12.3 L12.8,15.3 L5.9,15.3 L5.9,9.5 L10.5,9.5 L10.5,7.6 L5.9,7.6 L5.9,2.7 L12.6,2.7 L12.6,5.3 L14.8,5.3 L14.8,0.9 L1.4,0.9 L1.4,2.7 L3.4,2.7 L3.4,15.3 L1.4,15.3 L1.4,17.1 L1.3,17.1 L1.3,17.1 Z"></path>
						                    </g>
						                    <g transform="translate(131.000000, 1.000000)">
						                        <path d="M7.3,15 L7.3,17.3 L0.3,17.3 L0.3,15 L2.3,15 L2.3,2.9 L0.3,2.9 L0.3,0.6 L8.4,0.6 C10.8,0.6 12.1,0.9 13.2,1.6 C14.4,2.4 15,3.6 15,5.1 C15,7.1 14.1,8.2 12.1,9 C13.7,9.6 14.1,10.3 14.1,12.4 L14.1,15.1 L16.3,15.1 L16.3,17.4 L11.1,17.4 L11.1,13.8 C11.1,10.8 10.5,10.1 7.9,10.1 L5.3,10.1 L5.3,15 L7.3,15 Z M8.8,7.7 C10.9,7.7 11.8,7 11.8,5.3 C11.8,3.6 10.9,2.9 8.8,2.9 L5.2,2.9 L5.2,7.7 L8.8,7.7 L8.8,7.7 Z"></path>
						                        <path d="M16.5,17.6 L10.8,17.6 L10.8,13.7 C10.8,10.8 10.3,10.3 7.9,10.3 L5.6,10.3 L5.6,14.7 L7.6,14.7 L7.6,17.6 L0,17.6 L0,14.7 L2,14.7 L2,3.1 L0,3.1 L0,0.2 L8.3,0.2 C10.7,0.2 12.1,0.5 13.3,1.3 C14.5,2.1 15.2,3.5 15.2,5 C15.2,6.9 14.4,8.1 12.7,8.9 C13.9,9.5 14.3,10.4 14.3,12.3 L14.3,14.7 L16.5,14.7 L16.5,17.6 L16.5,17.6 Z M11.3,17.1 L16,17.1 L16,15.3 L13.8,15.3 L13.8,12.4 C13.8,10.4 13.4,9.8 11.9,9.2 L11.2,8.9 L11.9,8.6 C13.8,7.9 14.6,6.9 14.6,5 C14.6,3.6 14,2.4 12.9,1.7 C11.8,1 10.6,0.7 8.2,0.7 L0.4,0.7 L0.4,2.5 L2.4,2.5 L2.4,15.1 L0.4,15.1 L0.4,16.9 L6.9,16.9 L6.9,15.1 L4.9,15.1 L4.9,9.6 L7.8,9.6 C10.6,9.6 11.3,10.4 11.3,13.5 L11.3,17.1 L11.3,17.1 Z M8.8,8 L5,8 L5,2.7 L8.8,2.7 C11,2.7 12,3.5 12,5.4 C12.1,7.1 11,8 8.8,8 L8.8,8 L8.8,8 Z M5.5,7.4 L8.8,7.4 C10.7,7.4 11.5,6.8 11.5,5.3 C11.5,3.8 10.7,3.2 8.8,3.2 L5.5,3.2 L5.5,7.4 L5.5,7.4 Z"></path>
						                    </g>
						                    <g transform="translate(150.000000, 0.000000)">
						                        <path d="M18.5,10 C18.5,15 14.8,18.7 9.8,18.7 C4.8,18.7 1.1,15 1.1,10 C1.1,5 4.8,1.3 9.8,1.3 C14.7,1.2 18.5,5 18.5,10 L18.5,10 L18.5,10 Z M4.4,10 C4.4,13.7 6.6,16.2 9.8,16.2 C13,16.2 15.2,13.7 15.2,10 C15.2,6.3 13,3.8 9.8,3.8 C6.6,3.8 4.4,6.3 4.4,10 L4.4,10 L4.4,10 Z"></path>
						                        <path d="M9.8,18.9 C4.7,18.9 0.9,15 0.9,9.9 C0.9,4.8 4.7,0.9 9.8,0.9 C14.9,0.9 18.7,4.8 18.7,9.9 C18.7,15.1 14.9,18.9 9.8,18.9 L9.8,18.9 L9.8,18.9 Z M9.8,1.5 C5,1.5 1.4,5.1 1.4,9.9 C1.4,14.7 5,18.4 9.8,18.4 C14.6,18.4 18.2,14.8 18.2,9.9 C18.2,5.1 14.6,1.5 9.8,1.5 L9.8,1.5 L9.8,1.5 Z M9.8,16.4 C6.4,16.4 4.1,13.8 4.1,9.9 C4.1,6.1 6.4,3.4 9.8,3.4 C13.1,3.4 15.5,6.1 15.5,9.9 C15.5,13.8 13.2,16.4 9.8,16.4 L9.8,16.4 L9.8,16.4 Z M9.8,4 C6.7,4 4.7,6.4 4.7,9.9 C4.7,13.5 6.8,15.8 9.8,15.8 C12.9,15.8 14.9,13.4 14.9,9.9 C14.9,6.4 12.9,4 9.8,4 L9.8,4 L9.8,4 Z"></path>
						                    </g>
						                    <g transform="translate(170.000000, 1.000000)">
						                        <path d="M6.6,12.2 L5.5,15 L7.7,15 L7.7,17.3 L1,17.3 L1,15 L2.7,15 L7.6,2.9 L5.8,2.9 L5.8,0.6 L14.4,0.6 L14.4,2.9 L12.6,2.9 L17.5,15 L19.2,15 L19.2,17.3 L12.2,17.3 L12.2,15 L14.4,15 L13.3,12.2 L6.6,12.2 L6.6,12.2 Z M10,3.7 L7.6,9.8 L12.4,9.8 L10,3.7 L10,3.7 Z"></path>
						                        <path d="M19.6,17.6 L12,17.6 L12,14.7 L14.1,14.7 L13.2,12.4 L6.8,12.4 L5.9,14.7 L8,14.7 L8,17.6 L0.8,17.6 L0.8,14.7 L2.6,14.7 L7.3,3.1 L5.7,3.1 L5.7,0.2 L14.8,0.2 L14.8,3.1 L13.2,3.1 L17.9,14.7 L19.7,14.7 L19.7,17.6 L19.6,17.6 L19.6,17.6 Z M12.5,17.1 L19,17.1 L19,15.3 L17.4,15.3 L17.3,15.1 L12.2,2.6 L14.1,2.6 L14.1,0.8 L6.1,0.8 L6.1,2.6 L8,2.6 L7.9,3 L2.9,15.3 L1.3,15.3 L1.3,17.1 L7.4,17.1 L7.4,15.3 L5.1,15.3 L6.4,12 L13.5,12 L14.8,15.3 L12.5,15.3 L12.5,17.1 L12.5,17.1 Z M12.8,10 L7.2,10 L10,2.9 L12.8,10 L12.8,10 Z M8,9.5 L12,9.5 L10,4.4 L8,9.5 L8,9.5 Z"></path>
						                    </g>
						                    <g transform="translate(192.000000, 1.000000)">
						                        <path d="M14.3,6 L12.1,6 L12.1,4.6 C11.3,3.5 9.4,2.8 7.3,2.8 C5.3,2.8 4,3.7 4,5.1 C4,6.3 4.8,6.8 7.3,7.3 L9.6,7.8 C13.5,8.6 14.9,9.8 14.9,12.3 C14.9,15.8 12.7,17.7 8.6,17.7 C6.3,17.7 4.8,17.1 3.3,15.9 L3.3,17.4 L1.1,17.4 L1.1,11.8 L3.3,11.8 L3.3,13.2 C4.8,14.5 6.6,15.2 8.6,15.2 C10.6,15.2 12.1,14.2 12.1,12.9 C12.1,11.8 11.3,11.2 9.3,10.8 L6.9,10.3 C5.1,9.9 3.8,9.5 3.1,8.9 C2,8.1 1.4,6.7 1.4,5.2 C1.4,2.2 3.8,0.3 7.4,0.3 C9.5,0.3 10.8,0.8 12.2,1.9 L12.2,0.6 L14.4,0.6 L14.4,6 L14.3,6 L14.3,6 Z"></path>
						                        <path d="M8.6,17.9 C6.5,17.9 5,17.4 3.6,16.4 L3.6,17.6 L0.9,17.6 L0.9,11.4 L3.6,11.4 L3.6,13 C5,14.2 6.7,14.9 8.6,14.9 C10.5,14.9 11.8,14.1 11.8,12.9 C11.8,12.2 11.5,11.5 9.2,11 L6.8,10.5 C4.9,10.1 3.6,9.7 2.9,9.1 C1.8,8.3 1.1,6.8 1.1,5.2 C1.1,2.1 3.6,0 7.4,0 C9.3,0 10.6,0.4 11.9,1.4 L11.9,0.4 L14.6,0.4 L14.6,6.4 L11.9,6.4 L11.9,4.8 C11.1,3.8 9.3,3.1 7.4,3.1 C5.5,3.1 4.4,3.9 4.4,5.1 C4.4,6 4.8,6.5 7.5,7.1 L9.8,7.6 C13.8,8.4 15.3,9.7 15.3,12.4 C15.2,16 13,17.9 8.6,17.9 L8.6,17.9 L8.6,17.9 Z M3.1,15.3 L3.5,15.7 C4.9,16.9 6.5,17.4 8.6,17.4 C12.6,17.4 14.7,15.7 14.7,12.3 C14.7,9.9 13.4,8.8 9.6,8 L7.3,7.5 C4.9,7 3.8,6.5 3.8,5 C3.8,3.4 5.2,2.4 7.4,2.4 C9.5,2.4 11.5,3.2 12.4,4.3 L12.5,4.4 L12.5,5.7 L14.1,5.7 L14.1,0.8 L12.5,0.8 L12.5,2.4 L12.1,2 C10.7,0.9 9.4,0.4 7.5,0.4 C4,0.4 1.8,2.2 1.8,5 C1.8,6.4 2.4,7.8 3.4,8.5 C4.1,9 5.4,9.5 7.1,9.8 L9.5,10.3 C11,10.6 12.5,11.2 12.5,12.7 C12.5,14.2 10.9,15.3 8.7,15.3 C6.6,15.3 4.8,14.6 3.3,13.2 L3.2,13.1 L3.2,12 L1.6,12 L1.6,17.1 L3.2,17.1 L3.2,15.3 L3.1,15.3 L3.1,15.3 Z"></path>
						                    </g>
						                    <g transform="translate(211.000000, 1.000000)">
						                        <path d="M10.1,15 L12.5,15 L12.5,17.3 L4.7,17.3 L4.7,15 L7.1,15 L7.1,2.9 L4,2.9 L4,6.4 L1.2,6.4 L1.2,0.5 L16,0.5 L16,6.4 L13.2,6.4 L13.2,2.9 L10.1,2.9 L10.1,15 L10.1,15 Z"></path>
						                        <path d="M12.7,17.6 L4.3,17.6 L4.3,14.7 L6.7,14.7 L6.7,3.1 L4.1,3.1 L4.1,6.6 L0.8,6.6 L0.8,0.2 L16.1,0.2 L16.1,6.6 L12.8,6.6 L12.8,3.1 L10.2,3.1 L10.2,14.7 L12.6,14.7 L12.6,17.6 L12.7,17.6 L12.7,17.6 Z M4.9,17.1 L12.2,17.1 L12.2,15.3 L9.8,15.3 L9.8,2.7 L13.5,2.7 L13.5,6.2 L15.7,6.2 L15.7,0.8 L1.5,0.8 L1.5,6.2 L3.7,6.2 L3.7,2.7 L7.3,2.7 L7.3,15.3 L4.9,15.3 L4.9,17.1 L4.9,17.1 Z"></path>
						                    </g>
						                    <g transform="translate(231.000000, 1.000000)">
						                        <path d="M15,5.6 L12.2,5.6 L12.2,3 L6.1,3 L6.1,7.4 L10.7,7.4 L10.7,9.8 L6.1,9.8 L6.1,15.1 L12.5,15.1 L12.5,12.1 L15.3,12.1 L15.3,17.4 L1,17.4 L1,15 L3,15 L3,2.9 L1,2.9 L1,0.6 L15,0.6 L15,5.6 L15,5.6 Z"></path>
						                        <path d="M15.5,17.6 L0.8,17.6 L0.8,14.7 L2.8,14.7 L2.8,3.1 L0.8,3.1 L0.8,0.2 L15.2,0.2 L15.2,5.7 L11.9,5.7 L11.9,3.1 L6.3,3.1 L6.3,6.9 L10.9,6.9 L10.9,9.9 L6.3,9.9 L6.3,14.6 L12.2,14.6 L12.2,11.6 L15.5,11.6 L15.5,17.6 L15.5,17.6 Z M1.3,17.1 L15,17.1 L15,12.3 L12.8,12.3 L12.8,15.3 L5.9,15.3 L5.9,9.5 L10.5,9.5 L10.5,7.6 L5.9,7.6 L5.9,2.7 L12.6,2.7 L12.6,5.3 L14.8,5.3 L14.8,0.9 L1.4,0.9 L1.4,2.7 L3.4,2.7 L3.4,15.3 L1.4,15.3 L1.4,17.1 L1.3,17.1 L1.3,17.1 Z"></path>
						                    </g>
						                    <g transform="translate(251.000000, 1.000000)">
						                        <path d="M6,15 L8,15 L8,17.3 L1,17.3 L1,15 L3,15 L3,2.9 L1,2.9 L1,0.6 L9.1,0.6 C11.5,0.6 12.8,0.9 13.9,1.6 C15.1,2.4 15.7,3.6 15.7,5.1 C15.7,7.1 14.8,8.2 12.8,9 C14.4,9.6 14.8,10.3 14.8,12.4 L14.8,15.1 L17,15.1 L17,17.4 L11.8,17.4 L11.8,13.8 C11.8,10.8 11.2,10.1 8.6,10.1 L6,10.1 L6,15 L6,15 Z M9.5,7.7 C11.6,7.7 12.5,7 12.5,5.3 C12.5,3.6 11.6,2.9 9.5,2.9 L6,2.9 L6,7.7 L9.5,7.7 L9.5,7.7 Z"></path>
						                        <path d="M17.2,17.6 L11.5,17.6 L11.5,13.7 C11.5,10.8 11,10.3 8.6,10.3 L6.3,10.3 L6.3,14.7 L8.3,14.7 L8.3,17.6 L0.7,17.6 L0.7,14.7 L2.7,14.7 L2.7,3.1 L0.7,3.1 L0.7,0.2 L9,0.2 C11.4,0.2 12.8,0.5 14,1.3 C15.2,2.1 15.9,3.5 15.9,5 C15.9,6.9 15.1,8.1 13.4,8.9 C14.6,9.5 15,10.4 15,12.3 L15,14.7 L17.2,14.7 L17.2,17.6 L17.2,17.6 Z M12,17.1 L16.7,17.1 L16.7,15.3 L14.5,15.3 L14.5,12.4 C14.5,10.4 14.1,9.8 12.6,9.2 L11.9,8.9 L12.6,8.6 C14.5,7.9 15.3,6.9 15.3,5 C15.3,3.6 14.7,2.4 13.6,1.7 C12.5,1 11.3,0.7 8.9,0.7 L1.1,0.7 L1.1,2.5 L3.1,2.5 L3.1,15.1 L1.1,15.1 L1.1,16.9 L7.6,16.9 L7.6,15.1 L5.6,15.1 L5.6,9.6 L8.5,9.6 C11.3,9.6 12,10.4 12,13.5 L12,17.1 L12,17.1 Z M9.5,8 L5.7,8 L5.7,2.7 L9.5,2.7 C11.7,2.7 12.7,3.5 12.7,5.4 C12.8,7.1 11.7,8 9.5,8 L9.5,8 L9.5,8 Z M6.2,7.4 L9.5,7.4 C11.4,7.4 12.2,6.8 12.2,5.3 C12.2,3.8 11.4,3.2 9.5,3.2 L6.2,3.2 L6.2,7.4 L6.2,7.4 Z"></path>
						                    </g>
						                    <g transform="translate(272.000000, 1.000000)">
						                        <path d="M14.3,6 L12.1,6 L12.1,4.6 C11.3,3.5 9.4,2.8 7.3,2.8 C5.3,2.8 4,3.7 4,5.1 C4,6.3 4.8,6.8 7.3,7.3 L9.6,7.8 C13.5,8.6 14.9,9.8 14.9,12.3 C14.9,15.8 12.7,17.7 8.6,17.7 C6.3,17.7 4.8,17.1 3.3,15.9 L3.3,17.4 L1.1,17.4 L1.1,11.8 L3.3,11.8 L3.3,13.2 C4.8,14.5 6.6,15.2 8.6,15.2 C10.6,15.2 12.1,14.2 12.1,12.9 C12.1,11.8 11.3,11.2 9.3,10.8 L6.9,10.3 C5.1,9.9 3.8,9.5 3.1,8.9 C2,8.1 1.4,6.7 1.4,5.2 C1.4,2.2 3.8,0.3 7.4,0.3 C9.5,0.3 10.8,0.8 12.2,1.9 L12.2,0.6 L14.4,0.6 L14.4,6 L14.3,6 L14.3,6 Z"></path>
						                        <path d="M8.6,17.9 C6.5,17.9 5,17.4 3.6,16.4 L3.6,17.6 L0.9,17.6 L0.9,11.4 L3.6,11.4 L3.6,13 C5,14.2 6.7,14.9 8.6,14.9 C10.5,14.9 11.8,14.1 11.8,12.9 C11.8,12.2 11.5,11.5 9.2,11 L6.8,10.5 C4.9,10.1 3.7,9.7 2.9,9.1 C1.8,8.3 1.1,6.8 1.1,5.2 C1.1,2.1 3.6,0 7.4,0 C9.3,0 10.6,0.4 11.9,1.4 L11.9,0.4 L14.6,0.4 L14.6,6.4 L11.9,6.4 L11.9,4.8 C11.1,3.8 9.3,3.1 7.4,3.1 C5.5,3.1 4.4,3.9 4.4,5.1 C4.4,6 4.8,6.5 7.5,7.1 L9.8,7.6 C13.8,8.4 15.3,9.7 15.3,12.4 C15.2,16 13,17.9 8.6,17.9 L8.6,17.9 L8.6,17.9 Z M3,15.3 L3.4,15.7 C4.8,16.9 6.4,17.4 8.5,17.4 C12.5,17.4 14.6,15.7 14.6,12.3 C14.6,9.9 13.3,8.8 9.5,8 L7.2,7.5 C4.8,7 3.7,6.5 3.7,5 C3.7,3.4 5.1,2.4 7.3,2.4 C9.4,2.4 11.4,3.2 12.3,4.3 L12.4,4.4 L12.4,5.7 L14,5.7 L14,0.8 L12.4,0.8 L12.4,2.4 L12,2 C10.6,0.9 9.3,0.4 7.4,0.4 C3.9,0.4 1.7,2.2 1.7,5 C1.7,6.4 2.3,7.8 3.3,8.5 C4,9 5.3,9.5 7,9.8 L9.4,10.3 C10.9,10.6 12.4,11.2 12.4,12.7 C12.4,14.2 10.8,15.3 8.6,15.3 C6.5,15.3 4.7,14.6 3.2,13.2 L3.1,13.1 L3.1,12 L1.5,12 L1.5,17.1 L3.1,17.1 L3.1,15.3 L3,15.3 L3,15.3 Z"></path>
						                    </g>
						                </g>
						                <g>
						                    <path d="M25.1,18.9 L18.3,18.9 C17.6,12.6 15.8,9.2 12.9,9.2 C11,9.2 9.5,11.2 9.5,13.8 C9.5,16.3 10.5,18.1 14.1,22.1 L18.8,27.5 C24.9,34.3 27.5,39.7 27.5,45.6 C27.5,53.8 22.8,59.5 16.1,59.5 C12.8,59.5 10.6,58.4 7.9,55.5 L7.2,58.3 L1,58.3 L1,39.1 L7.9,39.1 C8.5,46.5 10.6,50.3 14,50.3 C16.1,50.3 17.7,48 17.7,45 C17.7,41.8 15.8,37.9 12.4,34.2 L7.9,29.3 C2.4,23.3 0.1,18.5 0.1,13.5 C0.1,6.1 4.6,0.9 10.9,0.9 C13.8,0.9 15.8,1.9 18.5,4.8 L19,2.1 L25.3,2.1 L25.3,18.9 L25.1,18.9 L25.1,18.9 Z"></path>
						                    <path d="M49.2,50.6 L53,50.6 L53,58.3 L35.8,58.3 L35.8,50.6 L39.7,50.6 L39.7,10 L34.8,10 L34.8,21.4 L28.5,21.4 L28.5,2.2 L60.4,2.2 L60.4,21.4 L54.1,21.4 L54.1,10 L49.1,10 L49.1,50.6 L49.2,50.6 L49.2,50.6 Z"></path>
						                    <path d="M96.9,10 L93.4,10 L93.4,41 C93.4,47.8 92.9,50.9 91.3,53.8 C89.3,57.6 85.2,59.7 80.1,59.7 C74.8,59.7 70.9,57.7 68.8,53.7 C67.2,50.7 66.8,48 66.8,41 L66.8,10 L63.4,10 L63.4,2.3 L79.4,2.3 L79.4,10 L76.4,10 L76.4,42.4 C76.4,49.1 77.7,51.4 81.4,51.4 C85.1,51.4 86.4,49.3 86.4,42.4 L86.4,10 L83.5,10 L83.5,2.3 L97,2.3 L97,10 L96.9,10 L96.9,10 Z"></path>
						                    <path d="M100.5,50.6 L103.9,50.6 L103.9,10 L100.5,10 L100.5,2.3 L116,2.3 L122.5,27.9 L129.1,2.3 L144.5,2.3 L144.5,10 L141.1,10 L141.1,50.6 L144.5,50.6 L144.5,58.3 L128,58.3 L128,50.6 L131.5,50.6 L131.5,17.6 L121.9,52.7 L120.9,52.7 L111.2,17.6 L111.2,50.6 L114.7,50.6 L114.7,58.3 L100.6,58.3 L100.6,50.6 L100.5,50.6 L100.5,50.6 Z"></path>
						                    <path d="M151,10 L147.6,10 L147.6,2.3 L161.5,2.3 C172.3,2.3 178.1,8.4 178.1,19.7 C178.1,31.3 172.3,37 160.5,37 L160.5,50.6 L165.1,50.6 L165.1,58.3 L147.5,58.3 L147.5,50.6 L150.9,50.6 L150.9,10 L151,10 L151,10 Z M161.7,29.3 C166.1,29.3 168.1,26.1 168.1,19.4 C168.1,13.5 165.9,10.1 162.1,10.1 L160.4,10.1 L160.4,29.3 L161.7,29.3 L161.7,29.3 Z"></path>
						                    <path d="M201.2,50.6 L205.1,50.6 L205.1,58.3 L187.9,58.3 L187.9,50.6 L191.8,50.6 L191.8,10 L186.9,10 L186.9,21.4 L180.6,21.4 L180.6,2.2 L212.5,2.2 L212.5,21.4 L206.2,21.4 L206.2,10 L201.2,10 L201.2,50.6 L201.2,50.6 Z"></path>
						                    <path d="M241.3,7.8 C244.1,12.9 245.1,18.9 245.1,30.3 C245.1,41.8 244.1,47.8 241.3,52.9 C238.9,57.3 234.9,59.6 229.9,59.6 C224.8,59.6 220.7,57.2 218.4,52.9 C215.6,47.7 214.6,41.8 214.6,30.3 C214.6,19 215.6,12.7 218.4,7.8 C220.8,3.4 224.9,1.1 229.9,1.1 C234.9,1.1 238.9,3.4 241.3,7.8 L241.3,7.8 L241.3,7.8 Z M225.1,30.3 C225.1,47.3 226,51.4 229.9,51.4 C233.7,51.4 234.6,47.3 234.6,30.3 C234.6,13.4 233.7,9.3 229.9,9.3 C226,9.3 225.1,13.4 225.1,30.3 L225.1,30.3 L225.1,30.3 Z"></path>
						                    <path d="M295.7,10 L292.4,10 L284.5,58.3 L275.5,58.3 L270.3,27.2 L265.3,58.3 L256.4,58.3 L248,10 L244.7,10 L244.7,2.3 L260,2.3 L260,10 L257.1,10 L262,39.8 L268.1,2.2 L275.1,2.2 L281.2,40.4 L285.8,9.9 L282.8,9.9 L282.8,2.2 L295.7,2.2 L295.7,10 L295.7,10 Z"></path>
						                    <path d="M299,50.6 L302.4,50.6 L302.4,10 L299,10 L299,2.3 L312.5,2.3 L323.4,35.3 L323.4,10 L319.9,10 L319.9,2.3 L334,2.3 L334,10 L330.6,10 L330.6,58.3 L321.6,58.3 L309.6,22.1 L309.6,50.6 L313.1,50.6 L313.1,58.3 L299,58.3 L299,50.6 L299,50.6 Z"></path>
						                </g>
						            </g>
						        </g>
						    </g>
						</svg>
					</a>

					<hr />

				</div>

				<div class="fb-like-box" data-href="https://www.facebook.com/PieperCafe" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>

			</section>


		</header><!-- #masthead -->

		<div id="content" class="site-content">
