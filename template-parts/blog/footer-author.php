<?php
/**
 * The footer author info for blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNN
 */

?>

<aside id="footer-author-info" class="blog-footer">
	<?php echo get_avatar( get_the_author_meta( 'ID' ) , 100 ); ?>
	<h3><?php the_author(); ?></h3>
	<p><?php the_author_meta('description'); ?></p>
	<p><?php the_time('F j, Y'); ?></p>
	<div class="tag-wrap">
		<?php the_tags(); ?>
	</div>
</aside><!-- #author-info -->
