<?php
/**
 * Custom functions which enhance the theme by hooking into WordPress
 * Functions for WooCommerce
 * @package TNN
 */
 
 /**
  * Declare theme support for woocommerce
  */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/**
 * Remove WooCommerce stylesheets
 */
 // Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * WooCommerce - Change number or products per row to 4
 * Works if using default WooCommerce CSS
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
  // Change number or products per row to 4
	function loop_columns() {
		return 4; // 4 products per row
	}
}

/**
 * WooCommerce Shop - Number of products per page.
 *
 * Changes the number of products per page for the WooCommerce shop.
 */
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );


/**
 * Remove Type Column from My Content Area
 * The “My Content” section of the Member Area will show the content type
 * (Post, Page, Project, Forum, etc) as this paginated section shows all accessible content
 * (posts, pages, custom post types) on the site. This snippet removes the “Type” column if its display isn’t needed.
 */
function sv_members_area_content_remove_column( $columns ) {	
	// unset the "type" column, which shows post, page, project, etc
	if ( isset( $columns['membership-content-type'] ) ) {
		unset( $columns['membership-content-type'] );
	}
	return $columns;
}
add_filter( 'wc_memberships_members_area_my_membership_content_column_names',
 'sv_members_area_content_remove_column' );

/**
 * Remove Excerpt Column from My Products Area
 * The paginated “My Products” section of the Member Area will show all accessible products for the member 
 * (those the plan grants viewing / purchasing for). This snippet removes the “Description” / 
 * Excerpt column if its display isn’t needed.
 */
// Removes the product short description / excerpt column from "My Products"
function sv_members_area_products_table_columns( $columns ) {
  if ( isset( $columns['membership-product-excerpt'] ) ) {
      unset( $columns['membership-product-excerpt'] );
  }
  return $columns;
}
add_filter('wc_memberships_members_area_my_membership_products_column_names',
 'sv_members_area_products_table_columns', 10, 1 );

/**
* Remove Excerpt Column from My Content Area
* The paginated “My Content” section of the Member Area will show all accessible content for the
* member (those the plan grants viewing / purchasing for). This snippet removes the “Description” / Excerpt 
* column if its display isn’t needed.
*/
// Removes the product short description / excerpt column from "My Products"
function sv_members_area_content_table_columns( $columns ) {
  if ( isset( $columns['membership-content-excerpt'] ) ) {
      unset( $columns['membership-content-excerpt'] );
  }
  return $columns;
}
add_filter('wc_memberships_members_area_my_membership_content_column_names',
 'sv_members_area_content_table_columns', 10, 1 );

/**
 * Hook in on activation
 */
/**
 * Define image sizes
 */
function tnn_woocommerce_image_dimensions() {
	global $pagenow;
 
	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}
  	$catalog = array(
		'width' 	=> '300',	// px
		'height'	=> '300',	// px
		'crop'		=> 1 		// true
	);
	$single = array(
		'width' 	=> '600',	// px
		'height'	=> '600',	// px
		'crop'		=> 1 		// true
	);
	$thumbnail = array(
		'width' 	=> '120',	// px
		'height'	=> '120',	// px
		'crop'		=> 0 		// false
	);
	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
add_action( 'after_switch_theme', 'tnn_woocommerce_image_dimensions', 1 );