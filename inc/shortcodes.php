<?php
/**
 * Shortcodes for WordPress posts and pages
 *
 * @package TNN
 */

// [testimonial][/testimonial]
function testimonial_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'alt' => 'alt text',
        'src' => 'img source',
        'author' => 'author',
        'description' => 'description',
    ), $atts );
    $alt = $a['alt'];
    $src = $a['src'];
    $author = $a['author'];
    $desc = $a['description'];
    return '
    <figure class="testimonial">
        <img class="testimonial-image" alt="' . $alt . '" src="' . $src . '">
        <blockquote>
            <i class="fa fa-quote-left fa-lg fa-pull-left fa-border" aria-hidden="true"></i>'
             . $content . 
        '</blockquote>
        <footer>
            <cite> - ' . $author . ', ' . $desc . '</cite>
        </footer>
    </figure>';
}
add_shortcode( 'testimonial', 'testimonial_shortcode' );

/**
 * Accordion shortcode
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