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

			<header class="products-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );

				?>

			</header><!-- .page-header -->
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
