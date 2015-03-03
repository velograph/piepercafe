<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pieper Cafe
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<img src="<?php the_field('top_image_banner'); ?>" />

			<section class="menu">

				<h1>Menu</h1>

				<div class="menu-row">

					<div class="menu-section">

						<h2><?php the_field('breakfast_title'); ?></h2>

						<?php the_field('breakfast_menu'); ?>

					</div>

					<div class="menu-section">

						<h2><?php the_field('drink_title'); ?></h2>

						<?php the_field('drink_menu'); ?>


					</div>

				</div>

				<div class="menu-row">

					<h2><?php the_field('lunch_title'); ?></h2>

					<div class="menu-section">

						<?php the_field('lunch_menu'); ?>

					</div>

					<div class="menu-section">

						<?php the_field('lunch_menu_continued'); ?>

					</div>

				</div>

			</section>

			<img src="<?php the_field('bottom_image_banner'); ?>" />

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
