<?php
/**
 * Remove Cancel action from My Memberships table
 *
 * The actions in the “My Memberships” table can be removed if you don’t want to allow your members to manage their own memberships. This snippet removes the “Cancel” action from the “My Memberships” table in the account area.
 * 
 * Note: Memberships automatically does this for you if a membership is tied to a subscription, forcing cancellation via the billing instead.
 */
// remove the "Cancel" action for members
function sv_edit_my_memberships_actions( $actions ) {
  
	unset( $actions['cancel'] );
	return $actions;
}
add_filter( 'wc_memberships_members_area_my-memberships_actions', 'sv_edit_my_memberships_actions' );

/**
 * Remove Type Column from My Content Area
 *
 * The “My Content” section of the Member Area will show the content type (Post, Page, Project, Forum, etc) as this paginated section shows all accessible content (posts, pages, custom post types) on the site. This snippet removes the “Type” column if its display isn’t needed.
 */
// Removes the "Type" column from the "My Content" section of the member area
function sv_members_area_content_remove_column( $columns ) {
	
	// unset the "type" column, which shows post, page, project, etc
	if ( isset( $columns['membership-content-type'] ) ) {
		unset( $columns['membership-content-type'] );
	}
	
	return $columns;
}
add_filter( 'wc_memberships_members_area_my_membership_content_column_names', 'sv_members_area_content_remove_column' );

/**
 * Remove Excerpt Column from My Products Area
 *
 * The paginated “My Products” section of the Member Area will show all accessible products for the member (those the plan grants viewing / purchasing for). This snippet removes the “Description” / Excerpt column if its display isn’t needed.
 */
// Removes the product short description / excerpt column from "My Products"
function sv_members_area_products_table_columns( $columns ) {
    if ( isset( $columns['membership-product-excerpt'] ) ) {
        unset( $columns['membership-product-excerpt'] );
    }
    return $columns;
}
add_filter('wc_memberships_members_area_my_membership_products_column_names', 'sv_members_area_products_table_columns', 10, 1 );

/**
 * Remove Excerpt Column from My Content Area
 *
 * The paginated “My Content” section of the Member Area will show all accessible content for the member (those the plan grants viewing / purchasing for). This snippet removes the “Description” / Excerpt column if its display isn’t needed.
 */
// Removes the product short description / excerpt column from "My Products"
function sv_members_area_content_table_columns( $columns ) {
    if ( isset( $columns['membership-content-excerpt'] ) ) {
        unset( $columns['membership-content-excerpt'] );
    }
    return $columns;
}
add_filter('wc_memberships_members_area_my_membership_content_column_names', 'sv_members_area_content_table_columns', 10, 1 );

/**
 * Changing the My Content heading text
 *
 * Changes the heading text of the My Content section.
 */
function sv_members_area_content_section_title( $title ) {
    return __( 'Resources', 'my-theme-text-domain' );
}
add_filter( 'wc_memberships_members_area_my_membership_content_title', 'sv_members_area_content_section_title' );

/**
 * Changing the My Products heading text
 *
 * Changes the heading text of the My Products section.
 */
function sv_members_area_products_section_title( $title ) {
    return __( 'Products', 'my-theme-text-domain' );
}
add_filter( 'wc_memberships_members_area_my_membership_products_title', 'sv_members_area_products_section_title' );

/**
 * Rename Member Area Sections
 *
 * Renames the Member Area Sections
 */
function sv_rename_member_area_sections( $sections ) {

    $sections['my-membership-content'] = __( 'Resources', 'my-theme-text-domain' );
    $sections['my-membership-products'] = __( 'Products', 'my-theme-text-domain' );
    
    return $sections;
}
add_filter( 'wc_membership_plan_members_area_sections', 'sv_rename_member_area_sections' );

/**
 * Rename WooCommerce My Account Menu Items
 *
 * Changes the menu item titles in http://www.thenaturalnutritionist.com.au/my-account/ & Adds a custom endpoint
 * Dashboard becomes My Account.
 */
// From https://wpbeaches.com/change-rename-woocommerce-endpoints-accounts-page/
function wpb_woo_my_account_order() {
	$myorder = array(
	    'resources-for-real-food-athletes' => __( 'Resources', 'woocommerce' ),
		'downloads'       => __( 'Downloads', 'woocommerce' ),
	    'orders'          => __( 'Orders', 'woocommerce' ),
	    'dashboard'       => __( 'My Memberships', 'woocommerce' ),
		'edit-address'    => __( 'Addresses', 'woocommerce' ),
		'edit-account'    => __( 'Account Details', 'woocommerce' ),
		'customer-logout' => __( 'Logout', 'woocommerce' ),
	);
	return $myorder;
}
add_filter ( 'woocommerce_account_menu_items', 'wpb_woo_my_account_order' );

/**
 * Woocommerce password Strength requirment
 *
 *  Reduces the strength requirement on the woocommerce password.
 * 
 */
/**
 *Reduce the strength requirement on the woocommerce password.
 *
 * Strength Settings
 * 3 = Strong (default)
 * 2 = Medium
 * 1 = Weak
 * 0 = Very Weak / Anything
 */
function reduce_woocommerce_min_strength_requirement( $strength ) {
    return 2;
}
add_filter( 'woocommerce_min_password_strength', 'reduce_woocommerce_min_strength_requirement' );

/**
 * Custom registration field for Woocommerce
 *
 * Adds a custom 'First name' field to the user registration form on /my-account
 */
/**
 * Add new register fields for WooCommerce registration.
 */
function wooc_extra_register_fields() {
    ?>

    <p class="form-row form-row-wide">
    <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </p>

    <?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

/**
 * Validate Custom Field for Woocommerce user registration
 *
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
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
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

/**
 * Enqueue Font Awesome
 *
 * Enqueues font awesome
 */
//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

/**
 * Add Facebook Pixel tracking code to head of 'Order Recieved' WooCommerce endpoint
 *
 * Add Facebook Pixel tracking code to head of 'Order Recieved' WooCommerce endpoint
 */
// Adds to the Facebook Pixel tracking code to the <head> if WooCommerce endpoint is true
function facebook_pixel_order_received_head() {
	if(is_wc_endpoint_url( 'order-received' )){
	  echo '<!-- Facebook Pixel Code -->';
	  echo "<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1224260727689111'); // Insert your pixel ID here.
fbq('track', 'PageView');
fbq('track', 'Purchase');
</script>";
	  echo '<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1224260727689111&ev=PageView&noscript=1"
/></noscript>';
	  echo '<!-- DO NOT MODIFY -->';
	  echo '<!-- End Facebook Pixel Code -->';
	}
}
add_action('wp_head', 'facebook_pixel_order_received_head');

/**
 * Add Facebook Pixel tracking code to head of 'Thank you for joining our team' Mailchimp signup thank you page
 *
 * Add Facebook Pixel tracking code to head of 'Thank you for joining our team' Mailchimp signup thank you page
 */
// Adds to the Facebook Pixel tracking code to the <head> if Page is true
function facebook_pixel_mailchimp_thankyou_head() {
	if(is_page( 'thank-you-for-joining-our-team' )){
	  echo '<!-- Facebook Pixel Code -->';
	  echo "<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1224260727689111'); // Insert your pixel ID here.
fbq('track', 'PageView');
fbq('track', 'CompleteRegistration');
</script>";
	  echo '<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1224260727689111&ev=PageView&noscript=1"
/></noscript>';
	  echo '<!-- DO NOT MODIFY -->';
	  echo '<!-- End Facebook Pixel Code -->';
	}
}
add_action('wp_head', 'facebook_pixel_mailchimp_thankyou_head');

/**
 * WooCommerce Shop - Number of products per page.
 *
 * Changes the number of products per page for the WooCommerce shop.
 */
// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );

/**
 * WooCommerce - Change number of products per row
 *
 * Changes the number of rows to display in the WooCommerce shop.
 */
// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

/**
 * Accordion shortcode
 *
 * Adds a shortcode for accordions.
 * Requires id, heading, url, linktext and content.
 */
function accordion_sc( $atts = [], $content = null, $tag = '' ) {
  	// normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
  	// override default attributes with user attributes
    $accordion_atts = shortcode_atts([
	  'id' => '1',
	  'heading' => 'Default title',
	  'url' => 'Default url',
	  'linktext' => 'Detault link text',
	], $atts, $tag);
  	// set variable escape html
  	$id = esc_html($accordion_atts['id']);
  	$heading = esc_html($accordion_atts['heading']);
  	$url = esc_html($accordion_atts['url']);
  	$linktext = esc_html($accordion_atts['linktext']);
  	$h = '<div class="tab"><input id="' . $id . '" type="checkbox" name="tabs"><label for="' . $id . '">' . $heading . '</label><div class="tab-content"><p>' . $content . '</p><p><a class="tnn-program-link" href="'. $url . '">'. $linktext .'</a></p></div></div>';
 	// Return the html
	return $h;
}
add_shortcode( 'accordion_sc', 'accordion_sc' );
