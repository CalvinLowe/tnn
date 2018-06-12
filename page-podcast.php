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

/* Latest episode */
$episode = get_field('episode_number');
$guest = get_field('episode_guest');
$name = get_field('episode_name');
$url = get_field('episode_url');
$img = get_field('episode_img');
$shownotes = get_field('episode_shownotes');


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
  <div class="latest-episode-wrapper">
  <div>
      <h2 class="latest-podcast-title">Latest Podcast</h2>
      <div id="single-song-player" class="latest-podcast">
        <img amplitude-song-info="cover_art_url" amplitude-main-song-info="true"/>
        <div class="bottom-container">
          <progress class="amplitude-song-played-progress" amplitude-main-song-played-progress="true" id="song-played-progress"></progress>
          <div class="time-container">
            <span class="current-time">
              <span class="amplitude-current-hours" amplitude-main-current-hours="true"></span>:<span class="amplitude-current-minutes" amplitude-main-current-minutes="true"></span>:<span class="amplitude-current-seconds" amplitude-main-current-seconds="true"></span>
            </span>
            <span class="duration">
            <span class="amplitude-duration-hours" amplitude-main-duration-hours="true"></span>:<span class="amplitude-duration-minutes" amplitude-main-duration-minutes="true"></span>:<span class="amplitude-duration-seconds" amplitude-main-duration-seconds="true"></span>
            </span>
          </div>
          <div class="control-container">
            <div class="amplitude-play-pause" amplitude-main-play-pause="true" id="play-pause"></div>
            <div class="meta-container">
              <span amplitude-song-info="podcast" amplitude-main-song-info="true"></span>
              <span amplitude-song-info="episode" amplitude-main-song-info="true"></span>
              <span amplitude-song-info="name" amplitude-main-song-info="true"></span>
              <span amplitude-song-info="artist" amplitude-main-song-info="true"></span>
              <span amplitude-song-info="guest" amplitude-main-song-info="true"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2 class="latest-podcast-title">RFR <?php esc_html_e($episode); ?> - Show notes</h2>
      <div class="latest-podcast-shownotes">
              <?php esc_html_e($shownotes) ?>
      </div>
    </div>
  </div>

  <div class="previous-episode-wrapper">
    <h2 class="previous-podcast-title">Previous Episodes</h2>

    <?php if( have_rows('previous_episodes') ): ?>

      <ul class="previous-episodes-list">

        <?php while( have_rows('previous_episodes') ): the_row(); 

          // vars
          $ep_img = get_sub_field('episode_image');
          $ep_link = get_sub_field('epsiode_link');
          $ep_no = get_sub_field('episode_number');
          $ep_title = get_sub_field('episode_title');
          $ep_guest = get_sub_field('episode_guest');
          $ep_shownotes = get_sub_field('episode_shownotes');
          // I think I need and episode Itunes link

        ?>

        <li class="previous-episode">
          
          <?php if( $ep_title ): ?>
            <h3 class="previous-episode-title">RFR <?php echo $ep_no; ?> - <?php echo $ep_title; ?> with <?php echo $ep_guest; ?></h3>
          <?php endif; ?>

          <?php if( $ep_img ): ?>
            <img src="<?php echo $ep_img; ?>" alt="<?php echo $ep_title; ?>" />
          <?php endif; ?>

          <?php if( $ep_shownotes ): ?>
            <p><?php echo $ep_shownotes; ?></p>
          <?php endif; ?>
          
          <?php if( $ep_link ): ?>
				    <a href="<?php echo $ep_link; ?>"><?php echo $ep_link; ?></a>
			    <?php endif; ?>
        </li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>
  </div>

<script>
Amplitude.init({
    "bindings": {
      37: 'prev',
      39: 'next',
      32: 'play_pause'
    },
    "songs": [
      {
        "podcast": "The Real Food Reel",
        "episode": "Episode <?php esc_html_e($episode); ?>",
        "guest": "<?php esc_html_e($guest); ?>",
        "name": "<?php esc_html_e($name); ?>",
        "url": "<?php esc_html_e($url); ?>",
        "cover_art_url": "<?php esc_html_e($img); ?>"
      }
    ]
  });
  window.onkeydown = function(e) {
      return !(e.keyCode == 32);
  };
  /*
    Handles a click on the song played progress bar.
  */
  document.getElementById('song-played-progress').addEventListener('click', function( e ){
    var offset = this.getBoundingClientRect();
    var x = e.pageX - offset.left;
    Amplitude.setSongPlayedPercentage( ( parseFloat( x ) / parseFloat( this.offsetWidth) ) * 100 );
  });
</script>
<?php
get_sidebar();
get_footer();
