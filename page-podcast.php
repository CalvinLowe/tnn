<?php
/**
 * The template for displaying the podcast page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

get_header(); ?>
    
    <?php the_title( '<h1 class="podcast-title">', '</h1>' ); ?>
    
    <?php
        $podcast_img = get_field('podcast_img');
        if( !empty($podcast_img) ): ?>
            <img class="podcast-img" src="<?php echo esc_url($podcast_img['url']); ?>" alt="<?php echo esc_attr($podcast_img['alt']); ?>">
        <?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'podcast' );

            endwhile; // End of the loop.
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <h2 class="latest-podcast-title"><?php esc_html_e(get_field('latest_podcast')); ?></h2>
    <img class="latest-podcast" src=" http://via.placeholder.com/600x600" >
    
    <h2 class="previous-episodes-title"><?php esc_html_e(get_field('past_episodes')); ?></h2>
    <div class="previous-episodes-wrapper">
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
    </div>



<?php
get_sidebar();
get_footer();
