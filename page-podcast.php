<?php
/**
 * The template for displaying the podcast page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

get_header(); ?>
<?php
/* Variables */
$rfr = get_field('rfr_img');


?>
    
    <?php the_title( '<h1 class="podcast-title">', '</h1>' ); ?>
    
    <?php
        if( !empty($rfr) ): ?>
            <img class="podcast-img" src="<?php echo esc_url($rfr['url']); ?>" alt="<?php echo esc_attr($rfr['alt']); ?>">
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

  <div class="previous-episode-wrapper">
    <h2 class="previous-podcast-title">Episodes & Shownotes</h2>

    <?php if( have_rows('previous_episodes') ): ?>

      <ul class="previous-episodes-list">

        <?php while( have_rows('previous_episodes') ): the_row(); 

          // vars
          $ep_img = get_sub_field('episode_image');
          $ep_no = get_sub_field('episode_number');
          $ep_title = get_sub_field('episode_title');
          $ep_guest = get_sub_field('episode_guest');
          $ep_shownotes = get_sub_field('episode_shownotes');

        ?>

        <li class="previous-episode">
          
          <?php if( $ep_title ): ?>
            <h3 class="previous-episode-title">RFR <?php echo $ep_no; ?> - <?php echo $ep_title; ?> with <?php echo $ep_guest; ?></h3>
          <?php endif; ?>

          <?php if( $ep_img ): ?>
            <img class="previous-episode-img" src="<?php echo $ep_img; ?>" alt="<?php echo $ep_title; ?>" />
          <?php endif; ?>

          <?php if( $ep_shownotes ): ?>
            <div class="previous-epsiode-shownotes"><?php echo $ep_shownotes; ?></div>
          <?php endif; ?>
          
        </li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>
  </div>

<?php
get_sidebar();
get_footer();
