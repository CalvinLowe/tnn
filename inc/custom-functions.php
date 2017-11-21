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
  * Loads a custom stylesheet to wp-login.php
  */
  function my_login_stylesheet() {
    wp_enqueue_style('custom-login', get_template_directory_uri() . '/css/login-min.css', array(),
     filemtime(get_template_directory() . '/css/login-min.css'), false);
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
      $content = '<div><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" width="' . $width . 
      '" height="' . $height . '"></div>' . $content;
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
 * Change the logo link on the WordPress login page
 */
function my_login_logo_url() {
  return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/**
 * Change the logo title on the WordPress login page
 */
function my_login_logo_url_title() {
  return 'The Natural Nutritionist';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );