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
    <div id="single-song-player" class="latest-podcast">
            <img amplitude-song-info="cover_art_url" amplitude-main-song-info="true"/>
            <div class="bottom-container">
                <progress class="amplitude-song-played-progress" amplitude-main-song-played-progress="true" id="song-played-progress"></progress>

                <div class="time-container">
                <span class="current-time">
                    <span class="amplitude-current-minutes" amplitude-main-current-minutes="true"></span>:<span class="amplitude-current-seconds" amplitude-main-current-seconds="true"></span>
                </span>
                <span class="duration">
                    <span class="amplitude-duration-minutes" amplitude-main-duration-minutes="true"></span>:<span class="amplitude-duration-seconds" amplitude-main-duration-seconds="true"></span>
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
    
    <h2 class="previous-episodes-title"><?php esc_html_e(get_field('past_episodes')); ?></h2>
    <div class="previous-episodes-wrapper">
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
        <img class="previous-episode" src=" http://via.placeholder.com/600x600" >
    </div>
<style>
div#single-song-player {
    align-self: start;
  box-shadow: 0 4px 6px 0 rgba(0,0,0,0.2);
}
div#single-song-player img[amplitude-song-info="cover_art_url"] {
  width: 100%;
}
div#single-song-player div.bottom-container {
  background-color: #78bc42;
}
div#single-song-player div.bottom-container progress.amplitude-song-played-progress:not([value]) {
  background-color: #6a8139;
}
div#single-song-player div.bottom-container progress.amplitude-song-played-progress {
  background-color: #6a8139;
  -webkit-appearance: none;
  appearance: none;
  width: 100%;
  height: 5px;
  display: block;
  cursor: pointer;
  border: none;
}
div#single-song-player div.bottom-container progress[value]::-webkit-progress-bar {
  background-color: ;
}
div#single-song-player div.bottom-container progress[value]::-moz-progress-bar {
  background-color: #00a0ff;
}
div#single-song-player div.bottom-container progress[value]::-webkit-progress-value {
  background-color: #00a0ff;
}
div#single-song-player div.bottom-container div.time-container {
  opacity: 0.5;
  font-family: 'Open Sans';
  font-weight: 100;
  font-size: 12px;
  color: #fff;
  height: 15px;
}
div#single-song-player div.bottom-container div.time-container span.current-time {
  float: left;
  margin-left: 5px;
}
div#single-song-player div.bottom-container div.time-container span.duration {
  float: right;
  margin-right: 5px;
}
div#single-song-player div.bottom-container div.control-container {
  margin-top: 10px;
  padding: 10px;
}
div#single-song-player div.bottom-container div.control-container div.amplitude-play-pause {
  width: 74px;
  height: 74px;
  cursor: pointer;
  float: left;
  margin-left: 10px;
}
div#single-song-player div.bottom-container div.control-container div.amplitude-play-pause.amplitude-paused {
  background: url('../img/play.svg');
}
div#single-song-player div.bottom-container div.control-container div.amplitude-play-pause.amplitude-playing {
  background: url('../img/pause.svg');
}
div#single-song-player div.bottom-container div.control-container div.meta-container {
  float: left;
  width: calc(100% - 84px);
  color: white;
}
div#single-song-player div.bottom-container div.control-container div.meta-container span[amplitude-song-info="name"] {
  font-family: "Open Sans", sans-serif;
  font-size: 18px;
  color: #fff;
  display: block;
}
div#single-song-player div.bottom-container div.control-container div.meta-container span[amplitude-song-info="artist"] {
  font-family: "Open Sans", sans-serif;
  font-weight: 100;
  font-size: 14px;
  color: #fff;
  display: block;
}
div#single-song-player div.bottom-container div.control-container:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<script type="text/javascript">
      Amplitude.init({
        "bindings": {
          37: 'prev',
          39: 'next',
          32: 'play_pause'
        },
        "songs": [
          {
            "podcast": "The Real Food Reel",
            "episode": "RFR 169:",
            "guest": "Sahara Rose",
            "name": "Modern Day Ayurvedic Nutrition with Sahara Rose",
            "interviewer": "The Natural Nutritionist",
            "url": "http://thewellnesscouch.com/wp-content/uploads/podcasts/rfr/rfr-169-modern-day-ayurvedic-nutrition-with-sahara-rose.mp3",
            "cover_art_url": "http://thewellnesscouch.com/wp-content/uploads/2018/04/RFR-169-Sahara-photo-.jpg"
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
