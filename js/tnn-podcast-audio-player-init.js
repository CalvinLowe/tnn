Amplitude.init({
    "bindings": {
      37: 'prev',
      39: 'next',
      32: 'play_pause'
    },
    "songs": [
      {
        "podcast": "The Real Food Reel",
        "episode": "Episode 170",
        "guest": "Dr. Phil Maffetone",
        "name": "Big Sugar & the Overfat Epidemic with Dr Phil Maffetone",
        "url": "http://thewellnesscouch.com/wp-content/uploads/podcasts/rfr/rfr-170-big-sugar-the-overfat-epidemic-with-dr-phil-maffetone.mp3",
        "cover_art_url": "http://thewellnesscouch.com/wp-content/uploads/formidable/13/RFR-170-Social-Tile-2-800x675.png"
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