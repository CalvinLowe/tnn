<?php
/**
 * Enque Amplitude JS on podcast page.
 *
 * @package TNN
 */

 //page-id-6037


 function podcast_audio_player_head() {
	if(is_page( 'podcast' )){
        	echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/amplitudejs@3.2.3/dist/amplitude.js"></script>';
	}
}
add_action('wp_head', 'podcast_audio_player_head');

function podcast_audio_player_init_foot() {
	if(is_page( 'podcast' )){
		wp_enqueue_script( 'audio-player-init', get_template_directory_uri() . '/js/tnn-podcast-audio-player-init.js', array(), null, true );
	}
}
add_action('wp_footer', 'podcast_audio_player_init_foot');