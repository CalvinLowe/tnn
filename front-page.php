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

	<?php get_template_part( 'template-parts/front-page/slider', 'banner'); ?>
	
	<?php get_template_part( 'template-parts/front-page/sale', 'notice'); ?>

	<?php get_template_part( 'template-parts/common/mailchimp', 'opt-in'); ?>

	<?php get_template_part( 'template-parts/front-page/cta-images'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'front-page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/front-page/book-your-consultation'); ?>

	<?php get_template_part( 'template-parts/front-page/slider', 'popular-recipes'); ?>

	<?php get_template_part( 'template-parts/front-page/as-seen-in'); ?>

	<hr class="section-divider">

	<?php get_template_part( 'template-parts/common/latest-from-the-blog'); ?>

	<hr class="section-divider">

	<?php get_template_part( 'template-parts/front-page/advertising', 'products'); ?>

	<div class="front-page-rr-sponsors-container">
		<?php get_template_part( 'template-parts/front-page/advertising', 'recommended-reading'); ?>
		<?php get_template_part( 'template-parts/front-page/advertising', 'sponsors'); ?>
	</div>

<?php
get_sidebar();
get_footer();
