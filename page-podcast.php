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
$episode = get_field('episode_number');
$guest = get_field('episode_guest');
$name = get_field('episode_name');
$url = get_field('episode_url');
$img = get_field('episode_img');

?>
    
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
  <div class="latest-episode-wrapper">
    <h2 class="latest-podcast-title"><?php esc_html_e(get_field('latest_podcast')); ?></h2>
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
