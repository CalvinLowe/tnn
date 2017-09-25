<?php
/**
 * Custom functions which enhance the theme by hooking into WordPress
 *
 * @package TNN
 */

 /**
  * Add new image size after theme setup.
  */
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
 function wpdocs_theme_setup() {
     add_image_size( 'latest-thumb', 300, 300, true ); // 300 pixels wide, 300 pixels heigh, cropped
 }

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
 add_action( 'wp_enqueue_scripts', 'manage_woocommerce_styles', 99 );
 
 function manage_woocommerce_styles() {
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
 }

 /**
  * Remove WooCommerce stylesheets
  */
  // Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



 /**
  * Loads a custom stylesheet to wp-login.php
  */
  function my_login_stylesheet() {
    wp_enqueue_style('custom-login', get_template_directory_uri() . '/css/login-min.css', array(), filemtime(get_template_directory() . '/css/login-min.css'), false);
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

/**
 * Add hero images to the RSS feed
 */
function RSSImages($content) {
  global $post;
  if( is_feed() ) {
    $image = get_field('post_hero_image' );
    if( !empty($image) ) {
      // thumbnail
      $size = 'thumbnail';
      $width = '100%';
      $height = 'auto';
      $content = '<div><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" width="' . $width . '" height="' . $height . '"></div>' . $content;
    } else if ( has_post_thumbnail( $post->ID ) ){
      $output = get_the_post_thumbnail( $post->ID, 'medium' );
      $content = $output . $content;
    }
  }
  return $content;
}
add_filter('the_excerpt_rss', 'RSSImages');
add_filter('the_content_feed', 'RSSImages');

/**
 * WooCommerce 3 products per row
 */
 // Override theme default specification for product # per row
/*function loop_columns() {
  return 5; // 5 products per row
  }
  add_filter('loop_shop_columns', 'loop_columns', 999);
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}*/