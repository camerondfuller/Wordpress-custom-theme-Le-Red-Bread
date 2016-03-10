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
			<h3>Contact Info</h3>
			<div class="footer-email">
				<i class='fa fa-envelope'></i><a href="#">info@leredbread.com</a>
			</div>
			<div class="footer-phone">
				<i class="fa fa-phone"></i> <a href="#">(555) 555-5555</a>
			</div>
			<div class="footer-social">
				<a href="#"><i class="fa fa-facebook-square"></i></a>
				<a href="#"><i class="fa fa-twitter-square"></i></a>
				<a href="#"><i class="fa fa-google-plus-square"></i></a>
			</div>
		</div>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->

</div>
