<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="about-headline">
			<h1>Learn About Our Team and Culture</h1>
			<?php echo CFS()->get('subtitle'); ?>
		</div>
		<div class="about-team">
			<?php echo CFS()->get('the_team'); ?>
		</div>
		<div class="about-bakery">
			<?php echo CFS()->get('the_bakery'); ?>
		</div>
		<h2>Our Story</h2>
		<?php echo CFS()->get('our_story'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
