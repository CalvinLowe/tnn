Amplitude.init({
    "bindings": {
      37: 'prev',
      39: 'next',
      32: 'play_pause'
    },
    "songs": [
      {
        "podcast": "The Real Food Reel",
        "episode": "Episode 169",
        "guest": "Sahara Rose",
        "name": "Modern Day Ayurvedic Nutrition with Sahara Rose",
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