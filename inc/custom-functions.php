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
  // Remove each style one by one
  add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
  function jk_dequeue_styles( $enqueue_styles ) {
  	unset( $enqueue_styles['woocommerce-layout-css'] );	// Remove the layout/
  	unset( $enqueue_styles['woocommerce-smallscreen-css'] ); // Remove the smallscreen optimisation
  	unset( $enqueue_styles['woocommerce-general-css'] ); // Remove the gloss
    unset( $enqueue_styles['wc-memberships-frontend-css'] ); // Remove membership css
  	return $enqueue_styles;
  }

  // Or just remove them all in one line
  add_filter( 'woocommerce_enqueue_styles', '__return_false' );
