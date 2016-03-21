<?php
/**
* Template part for displaying single posts.
*
* @package RED_Starter_Theme
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="product-header">

		<!-- This part gets the picture -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<!-- This part gets the product's name -->
		<?php endif; ?>
	</div>
	<span class="price">Price <?php echo CFS()->get( 'price'); ?></span>
	<div class="product-content">
		<?php the_content(); ?>
		<?php red_starter_entry_footer(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
