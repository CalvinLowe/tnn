<?php
/**
 * Template part for displaying the as seen in
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<div class="as-seen-in">
	<h2 class="section-title"><?php esc_html_e( 'As seen in:', 'tnn' ); ?></h2>
	<?php
		$image = get_field('as_seen_in');
		if( !empty($image) ): ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
</div>