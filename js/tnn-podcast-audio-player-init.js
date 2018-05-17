Amplitude.init({
    "bindings": {
      37: 'prev',
      39: 'next',
      32: 'play_pause'
    },
    "songs": [
      {
        "podcast": "The Real Food Reel",
        "episode": "Episode 172",
        "guest": "Kirsty Wirth",
        "name": "Gutalicious Guts with Kirsty Wirth",
        "url": "http://thewellnesscouch.com/wp-content/uploads/podcasts/rfr/rfr-172-gutalicious-guts-with-kirsty-wirth.mp3",
        "cover_art_url": "http://thewellnesscouch.com/wp-content/uploads/2018/05/RFR-172-Gutalicious-Guts-with-Kirsty-Wirth-700x675.jpg"
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