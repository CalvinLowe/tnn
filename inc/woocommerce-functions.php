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
* Optimize WooCommerce Scripts
* Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
*/
//add_action( 'wp_enqueue_scripts', 'manage_woocommerce_styles', 99 );

/*function manage_woocommerce_styles() {
  //remove generator meta tag
  remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

  //first check that woo exists to prevent fatal errors
  if ( function_exists( 'is_woocommerce' ) ) {
    //dequeue scripts and styles
    if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
      //dequeue scripts
      wp_dequeue_script( 'wc_price_slider' );
      wp_dequeue_script( 'wc-single-product' );
      wp_dequeue_script( 'wc-add-to-cart' );
      wp_dequeue_script( 'wc-cart-fragments' );
      wp_dequeue_script( 'wc-checkout' );
      wp_dequeue_script( 'wc-add-to-cart-variation' );
      wp_dequeue_script( 'wc-single-product' );
      wp_dequeue_script( 'wc-cart' );
      wp_dequeue_script( 'wc-chosen' );
      wp_dequeue_script( 'woocommerce' );
      wp_dequeue_script( 'prettyPhoto' );
      wp_dequeue_script( 'prettyPhoto-init' );
      wp_dequeue_script( 'jquery-blockui' );
      wp_dequeue_script( 'jquery-placeholder' );
      wp_dequeue_script( 'fancybox' );
      wp_dequeue_script( 'jqueryui' );       
    }
  }
}*/

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
 * Custom registration field for Woocommerce
 * Adds a custom 'First name' field to the user registration form on /my-account
 */
/*function wooc_extra_register_fields() {
  ?>

  <p class="form-row form-row-wide">
  <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
  <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] , 'tnn'); ?>" />
  </p>

  <?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );
*/
/**
 * Validate Custom Field for Woocommerce user registration
 */

/**
 * Validate the extra register fields.
 *
 * @param WP_Error $validation_errors Errors.
 * @param string   $username          Current username.
 * @param string   $email             Current email.
 *
 * @return WP_Error
 */
function wooc_validate_extra_register_fields( $errors, $username, $email ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'tnn' ) );
    }

    return $errors;
}

add_filter( 'woocommerce_registration_errors', 'wooc_validate_extra_register_fields', 10, 3 );


/**
 * Save the extra register fields.
 *
 * Save the extra register fields.
 * 
 */
/**
 * Save the extra register fields.
 *
 * @param int $customer_id Current customer ID.
 */
function wooc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        // WordPress default first name field.
        update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );

        // WooCommerce billing first name.
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
    }
}

add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

/**
 * Phone Number Field Not Required on Checkout in WooCommerce
 */
add_filter( 'woocommerce_billing_fields', 'wc_npr_filter_phone', 10, 1 );

function wc_npr_filter_phone( $address_fields ) {
$address_fields['billing_phone']['required'] = false;
return $address_fields;
}

/**
 * Remove billing fields for virtual/downloadable products in WooCommerce
 */
add_filter( 'woocommerce_checkout_fields' , 'woo_remove_billing_checkout_fields' );

/**
 * Remove unwanted checkout fields
 *
 * @return $fields array
*/
function woo_remove_billing_checkout_fields( $fields ) {
    
    if( woo_cart_has_virtual_product() == true ) {
	    unset($fields['billing']['billing_company']);
	    unset($fields['billing']['billing_address_1']);
	    unset($fields['billing']['billing_address_2']);
	    unset($fields['billing']['billing_city']);
	    unset($fields['billing']['billing_postcode']);
	    unset($fields['billing']['billing_country']);
	    unset($fields['billing']['billing_state']);
	    unset($fields['billing']['billing_phone']);
	    unset($fields['order']['order_comments']);
	    unset($fields['billing']['billing_address_2']);
	    unset($fields['billing']['billing_postcode']);
	    unset($fields['billing']['billing_company']);
	    unset($fields['billing']['billing_city']);
    }
    
    return $fields;
}

/**
 * Check if the cart contains virtual product
 *
 * @return bool
*/
function woo_cart_has_virtual_product() {
  
  global $woocommerce;
  
  // By default, no virtual product
  $has_virtual_products = false;
  
  // Default virtual products number
  $virtual_products = 0;
  
  // Get all products in cart
  $products = $woocommerce->cart->get_cart();
  
  // Loop through cart products
  foreach( $products as $product ) {
	  
	  // Get product ID and '_virtual' post meta
	  $product_id = $product['product_id'];
	  $is_virtual = get_post_meta( $product_id, '_virtual', true );
	  
	  // Update $has_virtual_product if product is virtual
	  if( $is_virtual == 'yes' )
  		$virtual_products += 1;
  }
  
  if( count($products) == $virtual_products )
  	$has_virtual_products = true;
  
  return $has_virtual_products;

}