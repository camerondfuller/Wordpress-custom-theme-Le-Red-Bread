<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
 // Register Custom Taxonomy
 function register_product_type_taxonomy() {

 	$labels = array(
 		'name'                       => 'Product Types',
 		'singular_name'              => 'Product Type',
 		'menu_name'                  => 'Product Type',
 		'all_items'                  => 'All products',
 		'parent_item'                => 'Parent Product',
 		'parent_item_colon'          => 'Parent Product:',
 		'new_item_name'              => 'New Product Name',
 		'add_new_item'               => 'Add New Product',
 		'edit_item'                  => 'Edit Product',
 		'update_item'                => 'Update Product',
 		'view_item'                  => 'View Product',
 		'separate_items_with_commas' => 'Separate Products with commas',
 		'add_or_remove_items'        => 'Add or remove products',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular products',
 		'search_items'               => 'Search products',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No products',
 		'items_list'                 => 'Products list',
 		'items_list_navigation'      => 'Products list navigation',
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 	);
 	register_taxonomy( 'product-type', array( 'product' ), $args );

 }
 add_action( 'init', 'register_product_type_taxonomy', 0 );
// Add your custom taxonomies here...
// Register Custom Taxonomy
function testimonials_taxonomy() {

	$labels = array(
		'name'                       => 'Testimonial Taxonomies',
		'singular_name'              => 'Testimonial Taxonomy',
		'menu_name'                  => 'Taxonomy',
		'all_items'                  => 'All Testimonials',
		'parent_item'                => 'Parent Testimonial',
		'parent_item_colon'          => 'Parent Testimonial:',
		'new_item_name'              => 'New Testimonial Name',
		'add_new_item'               => 'Add New Testimonial',
		'edit_item'                  => 'Edit Testimonial',
		'update_item'                => 'Update Testimonial',
		'view_item'                  => 'View Testimonial',
		'separate_items_with_commas' => 'Separate testimonials with commas',
		'add_or_remove_items'        => 'Add or remove testimonials',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Testimonials',
		'search_items'               => 'Search Testimonials',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Testimonials',
		'items_list'                 => 'Testimonials list',
		'items_list_navigation'      => 'Testimonials list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'testimonial_taxonomy', array( 'post' ), $args );

}
add_action( 'init', 'testimonials_taxonomy', 0 );
