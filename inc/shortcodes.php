<?php
/**
 * Shortcodes for WordPress posts and pages
 *
 * @package TNN
 */

// [testimonial][/testimonial]
function testimonial_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'alt' => 'attribute 2 default',
        'src' => 'attribute 1 default',
    ), $atts );
    $alt = $a['alt'];
    $src = $a['src'];
    return '
    <figure class="testimonial">
        <blockquote>
            <img class="testimonial-image" alt="' . $alt . '" src="' . $src . '">
            <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>'
             . $content . 
        '</blockquote>
    </figure>';
}
add_shortcode( 'testimonial', 'testimonial_shortcode' );


/*<figure class="testimonial">
<img class="testimonial-image" alt="TNN Testimonials - Catherine O’Loughlin, Marathon runner" src="/wp-content/uploads/2017/04/TNN-testimonial-profile-picture-Catherine-OLoughlin.jpg"><p></p>
<blockquote><p>
    <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>Thank you so much for your support and help with getting my legs over the line  I’m proud to be able to say I’m a New York Marathon Finisher! I managed it in 4:11hrs which I’m pretty happy with considering I climbed 5 x bridges &amp; jostled amongst 50,000 people trying to achieve the same thing. I felt fantastic for the entire duration and never once hit a low point, which I am shocked about. It’s amazing how good nutrition and preparation carries you through!
</p></blockquote>
<footer>
    – <cite class="author">Catherine O’Loughlin</cite>, <cite class="description">Marathon runner</cite><br>
</footer>
</figure>*/
