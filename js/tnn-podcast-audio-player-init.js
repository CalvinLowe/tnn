Amplitude.init({
    "bindings": {
      37: 'prev',
      39: 'next',
      32: 'play_pause'
    },
    "songs": [
      {
        "podcast": "The Real Food Reel",
        "episode": "Episode 171",
        "guest": "",
        "name": "Pre-natal, Vitamin D & Iron Supplementation Exposed",
        "url": "http://thewellnesscouch.com/wp-content/uploads/podcasts/rfr/rfr-171-pre-natal-vitamin-d-iron-supplementation-exposed.mp3",
        "cover_art_url": "http://thewellnesscouch.com/wp-content/uploads/2018/05/RFR-171-Promo-Tile-800x675.png"
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