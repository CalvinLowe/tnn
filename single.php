<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TNN
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="post-categories">
				<?php the_category( '&#47;', '' ); ?>
			</div>

			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

			<div class="post-excerpt">
				<?php the_excerpt(); ?>
			</div>

			<?php if ( has_post_thumbnail() ) ?>
				<figure class="post-image">
					<?php the_post_thumbnail( 'large' ); ?>
					<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
				</figure>

			<?php
			get_template_part( 'template-parts/blog/sidebar', 'author' );

			get_template_part( 'template-parts/blog/sidebar', 'social' );

			get_template_part( 'template-parts/blog/sidebar', 'subscribe' );

			get_template_part( 'template-parts/content', 'post' );

			the_post_navigation();

			get_template_part( 'template-parts/blog/footer', 'author' );

			get_template_part( 'template-parts/blog/footer', 'social' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
