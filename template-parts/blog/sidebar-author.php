<?php
/**
 * The sidebar author info for blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNN
 */

?>

<?php
	// Author meta variables
	$postID = get_the_ID();
	$authorID = get_the_author_meta( 'ID' );
	$authorName = get_the_author();
	$authorFirstName = get_the_author_meta ( 'first_name' );
	$desc = get_the_author_meta( 'description' );
	$url = "https://thenaturalnutritionist.com.au/about/#$authorFirstName";
	$time = get_the_time('F j, Y');
?>
<aside id="sidebar-author-info" class="blog-sidebar blog-author-sidebar">
	<?php echo get_avatar( $authorID , 200 ); ?>
	<a href="<?php echo esc_url( $url ); ?>"><h3><?php echo $authorName ?></h3></a>
	<p><?php echo $desc; ?></p>
	<p><?php echo $time ?></p>
	<div class="tag-wrap">
		<?php the_tags(); ?>
	</div>
</aside><!-- #author-info -->
