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
			
			<?php
				$hero = get_field('post_hero_image');
				$caption = get_the_post_thumbnail_caption();				
				if ( empty($hero) && has_post_thumbnail() ){ ?>
					<figure class="post-image-alternative">
						<?php the_post_thumbnail( 'large' ); ?>
						<figcaption><?php echo $caption ?></figcaption>
					</figure>
				<?php } else if( !empty($hero) ): { ?>
					<figure class="post-hero-image">
						<img src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>" />
						<figcaption><?php echo $caption ?></figcaption>
					</figure>  
			<?php } endif; ?>

			<?php
			get_template_part( 'template-parts/blog/sidebar', 'author' );

			get_template_part( 'template-parts/blog/sidebar', 'social-subscribe' );

			get_template_part( 'template-parts/content', 'post' );

			$args = array(
				'prev_text'          => 'Previous post: %title',
				'next_text'          => 'Next post: %title',
				'screen_reader_text' => 'Post navigation'
			);
			the_post_navigation($args);
			//get_template_part( 'template-parts/blog/post', 'nav' );
			?>
			<hr>
			<footer class="post-footer">
				<?php get_template_part( 'template-parts/blog/footer', 'author' ); ?>
				<?php get_template_part( 'template-parts/blog/footer', 'social' ); ?>
			</footer>
			<hr>
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
