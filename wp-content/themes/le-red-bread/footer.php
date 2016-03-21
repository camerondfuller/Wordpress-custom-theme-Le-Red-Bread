<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-info-cont">
		<div class="contact-info">
			<h3>Contact</h3>
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
		<div class="logo footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/images/lrb-logo-white.svg'; ?>" alt="Le Red Bread Logo" /></a>
		</div>
		<div class="business-info-wrapper">
			<div class="business-info">
				<h3>Business Hours</h3>
				<p><span>Monday-Friday:</span> 9am to 5pm</p>
				<p><span>Saturday:</span> 9am to 5pm</p>
				<p><span>Sunday:</span> Closed</p>
			</div>
		</div>
	</div>

	<div class="site-info">
		Copyright &copy; 2016 Le Red Bread
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
