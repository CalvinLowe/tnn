<?php
/**
 * Template part for displaying the as seen in
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<h2 class="section-title"><?php esc_html_e( 'As seen in:', 'tnn' ); ?></h2>

<?php

$image = get_field('as_seen_in');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
