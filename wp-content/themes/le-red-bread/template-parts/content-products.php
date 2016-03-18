<?php
/**
* Template part for displaying posts.
*
* @package RED_Starter_Theme
*/

?>
	<div class="product-square">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="http://facebook.com"><?php the_post_thumbnail( 'medium' ); ?></a>
		<?php endif; ?>
		<div class="product-item-info">
			<div class="product-title"><?php the_title( ); ?></div>
			<!-- this displays the price -->
			<div class="product-price"><?php echo CFS()->get( 'price'); ?></div>
			<!-- this displays the price -->
		</div>
	</div>
