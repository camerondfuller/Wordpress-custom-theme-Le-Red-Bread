<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
function lrb_the_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'lrb_the_url' );

function change_admin_logo(){
	//changes the logo on the admin-login screen to the LRB logo
 echo '<style>
 	.login h1 a {
		background-image: url('.get_template_directory_uri().'/images/lrb-logo.svg);
		background-size:100%;
		margin:0;
		width:auto;
 	}
 </style>';
}
add_action( 'login_head', 'change_admin_logo');
add_filter( 'body_class', 'red_starter_body_classes' );
