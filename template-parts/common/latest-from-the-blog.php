<?php
/**
 * Template part for displaying the latest from the blog section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<h2 class="section-title section-title-large latest-blog-title">Latest from the blog</h2>
<ul class="latest-posts-ul">
<?php
	$args = array( 'numberposts' => '4' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li class="latest-post"><a href="' . get_permalink($recent["ID"]) . '">' . '<figure class="latest-post-figure">' . get_the_post_thumbnail($recent['ID'], array( 300, 300 )) . '<figcaption class="latest-post-title">' . $recent["post_title"] . '</figcaption> </figure> </a> </li> ';
	}
	wp_reset_query();
?>
</ul>
