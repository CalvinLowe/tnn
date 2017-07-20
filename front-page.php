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

	<div id="front-page-slider" class="slider">
		<?php get_template_part( 'template-parts/front-page/slider', 'banner'); ?>
	</div><!-- #front-page-slider -->

	<div id="front-page-sales-notice" class="sales-notice">
		<?php get_template_part( 'template-parts/front-page/sale', 'notice'); ?>
	</div><!-- #front-page-sales-notice -->

	<div id="front-page-mailchimp-opt-in" class="mailchimp-opt-in">
		<?php get_template_part( 'template-parts/front-page/mailchimp', 'opt-in'); ?>
	</div><!-- #front-page-mailchimp-opt-in -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'front-page' );

				endwhile; // End of the loop.
				?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
