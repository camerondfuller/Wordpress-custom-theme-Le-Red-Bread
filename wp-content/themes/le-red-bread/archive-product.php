<?php
/**
* The template for displaying product archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div class="products-content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<section class="products-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>
				<hr class="decorative">
			</section><!-- .page-header -->

			<section class="product-type-cont container">
				<?php $terms= get_terms('product-type'); ?>
				<?php if (!empty($terms)):?>
				<?php foreach($terms as $term):?>
					<div class="individual-tax-items">
						<div><a href="<?php echo get_term_link($term);?>"><img src="<?php echo get_template_directory_uri()."/images\/".$term->slug ?>.png" alt="picture relating to product type" /></a></div>
						<h3><?php echo $term->name;?></h3>
					</div>
				<?php endforeach; endif; ?>
			</section>

				<div class="products-grid">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						get_template_part( 'template-parts/content', 'products' );
						?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>
