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
  * Remove WooCommerce stylesheets
  */
  // Or just remove them all in one line
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Optimize WooCommerce Scripts
 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
 */
 add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
 
 function child_manage_woocommerce_styles() {
   //remove generator meta tag
   remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
 
   //first check that woo exists to prevent fatal errors
   if ( function_exists( 'is_woocommerce' ) ) {
     //dequeue scripts and styles
     if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
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