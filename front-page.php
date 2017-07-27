<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

get_header(); ?>

	<div id="front-page-slider" class="front-page-section slider">
		<?php get_template_part( 'template-parts/front-page/slider', 'banner'); ?>
	</div><!-- #front-page-slider -->

	<div id="front-page-sales-notice" class="front-page-section sales-notice">
		<?php get_template_part( 'template-parts/front-page/sale', 'notice'); ?>
	</div><!-- #front-page-sales-notice -->

	<div id="front-page-mailchimp-opt-in" class="front-page-section mailchimp-opt-in">
		<?php get_template_part( 'template-parts/front-page/mailchimp', 'opt-in'); ?>
	</div><!-- #front-page-mailchimp-opt-in -->

	<div id="front-page-cta-images" class="front-page-section cta-images">
		<?php get_template_part( 'template-parts/front-page/cta-images'); ?>
	</div><!-- #front-page-cta-images -->

	<div id="primary" class="front-page-section content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'front-page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="front-page-book-consultation" class="front-page-section consultation">
		<?php get_template_part( 'template-parts/front-page/book-your-consultation'); ?>
	</div><!-- #front-page-book-consultation -->

	<div id="popular-recipes-slider" class="front-page-section slider popular-recipes">
		<?php get_template_part( 'template-parts/front-page/slider', 'popular-recipes'); ?>
	</div><!-- #popular-recipes-slider -->

	<div id="as-seen-in" class="front-page-section as-seen-in">
		<?php get_template_part( 'template-parts/front-page/as-seen-in'); ?>
	</div><!-- #as-seen-in -->

	<hr class="section-divider">

	<div id="latest-from-the-blog" class="front-page-section latest-from-the-blog">
		<?php get_template_part( 'template-parts/common/latest-from-the-blog'); ?>
	</div><!-- #latest-from-the-blog -->

	<hr class="section-divider">

	<div id="front-page-product-advertising" class="front-page-section front-page-product-advertising">
		<?php get_template_part( 'template-parts/front-page/advertising', 'products'); ?>
	</div><!-- #front-page-product-advertising -->

	<div class="front-page-section front-page-rr-sponsors-container">

		<div id="front-page-recommended-reading-advertising" class="front-page-recommended-reading-advertising">
			<?php get_template_part( 'template-parts/front-page/advertising', 'recommended-reading'); ?>
		</div><!-- #front-page-recommended-reading-advertising -->

		<div id="front-page-sponsors-advertising" class="front-page-sponsors-advertising">
			<?php get_template_part( 'template-parts/front-page/advertising', 'sponsors'); ?>
		</div><!-- #front-page-sponsors-advertising -->

	</div>

<?php
get_sidebar();
get_footer();
