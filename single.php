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
			
			<?php
  				$hero = get_field('post_hero_image');
				if( !empty($hero) ): ?>
					<figure class="post-hero-image">
						<img src="<?php echo esc_html_e($hero['url']); ?>" alt="<?php echo esc_html_e($hero['alt']); ?>" />
						<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
					</figure>  
			<?php endif; ?>

			<?php
			get_template_part( 'template-parts/blog/sidebar', 'author' );

			get_template_part( 'template-parts/blog/sidebar', 'social-subscribe' );

			get_template_part( 'template-parts/content', 'post' );

			the_post_navigation();
			?>

			<footer class="post-footer">
				<?php
				get_template_part( 'template-parts/blog/footer', 'author' );
				get_template_part( 'template-parts/blog/footer', 'social' );
				?>
			</footer>

			<?php
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
