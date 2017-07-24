<?php
/**
 * Template part for displaying the latest from the blog section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<hr>
<h2>Latest from the blog</h2>
<ul>
<?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query();
?>
</ul>
<hr>
