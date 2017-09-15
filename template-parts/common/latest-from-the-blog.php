<?php
/**
 * Template part for displaying the latest from the blog section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="latest-from-the-blog">
	<h2 class="section-title section-title-large latest-blog-title"><?php esc_html_e( 'Latest from the blog', 'tnn' ); ?></h2>
	<ul class="latest-posts-ul">
	<?php
		$args = array( 'numberposts' => '4',
									'post_status' => 'publish',
	);
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
			echo '<li class="latest-post"><a href="' . get_permalink($recent["ID"]) . '">' . '<figure class="latest-post-figure">' . get_the_post_thumbnail($recent['ID'], 'latest-thumb') . '<figcaption class="latest-post-title"><h4>' . $recent["post_title"] . '</h4></figcaption> </figure> </a> </li> ';
		}
		wp_reset_query();
	?>
	</ul>
</div>