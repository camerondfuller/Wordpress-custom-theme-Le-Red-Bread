<?php
/**
* Template Name: About Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area-about container">
	<main id="main" class="site-main" role="main">

		<div class="about-headline">
			<h1>Learn About Our Team and Culture</h1>
			<p><?php echo CFS()->get('subtitle'); ?></p>
			<hr class="decorative">
		</div>

		<div class="photo-cont">
			<div class="about-block">
				<div class="about team">
						<img src="<?php echo get_template_directory_uri()?>/images/team.jpg" alt="the Le Red Bread Team" />
					<h3>Le Red Bread Team</h3>
					<span>Baking up a storm every day.</span>
					<?php echo CFS()->get('the_team'); ?>
				</div>
				<div class="about bakery">
					<img src="<?php echo get_template_directory_uri()?>/images/bakery.jpg" alt="The Le Red Bread Bakery" />
					<h3>Le Red Bread Bakery</h3>
					<span>A home away from home.</span>
					<?php echo CFS()->get('the_bakery'); ?>
				</div>
			</div>

		</div>
		<div class="about-story">
			<h2>Our Story</h2>
			<?php echo CFS()->get('our_story'); ?>
		</div>
		<section class="our-products-form container">
         <span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
         <a href="/contact/" class="btn">Contact Us</a>
      </section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
