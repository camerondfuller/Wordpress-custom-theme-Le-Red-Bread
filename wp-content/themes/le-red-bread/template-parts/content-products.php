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
			<span><?php the_title( ); ?></span>
			<span>........</span>
			<!-- this displays the price -->
			<span><?php echo CFS()->get( 'price'); ?></span>
			<!-- this displays the price -->
		</div>

	</div>
