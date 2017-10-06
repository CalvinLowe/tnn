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
