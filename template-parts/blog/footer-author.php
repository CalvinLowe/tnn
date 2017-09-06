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


	<h3><?php the_author(); ?></h3>
	<p>Author Description</p>
	<p>Post date</p>
	<div class="tag-wrap">
		<?php the_tags(); ?>
	</div>
</aside><!-- #author-info -->
