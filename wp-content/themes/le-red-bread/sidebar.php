<?php
/**
* The sidebar containing the main widget area.s
*
* @package RED_Starter_Theme
*/

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="sidebar-cont">
		<div class="sidebar-contact-info">
			<h2>Contact Info</h2>
			<div class="footer-phone">
				<i class="fa fa-phone"></i> <a href="#">(555) 555-5555</a>
			</div>
			<div class="footer-email">
				<i class='fa fa-envelope'></i><a href="#">info@leredbread.com</a>
			</div>
			<div class="address">
				<i class='fa fa-map-marker'></i>
				<span>123 Hastings Street
					<div>Vancouver, BC V61 2T9, CA</div></span>
			</div>
		</div>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->

</div>
