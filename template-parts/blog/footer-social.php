<?php
/**
 * The footer social share & subscribe for posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNN
 */

?>
<?php
    $link = get_permalink();
    $fb = 'https://www.facebook.com/sharer.php?' . $link;
    $tw = 'https://twitter.com/share?url=' . $link . '&text=' . get_the_title() . '&via=@natnutritionist';
    $mail = 'mailto:?subject=' . get_the_title() . '&body=' . get_the_excerpt() . '%0A%0A' . $link;
?>
<div id="footer-social-share" class="blog-footer">
    <h3><?php echo esc_html_e('Share this article', 'tnn'); ?></h3>
	<div id="footer-social-icons" class="blog-footer social-icons">
    <ul>
        <li><a href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
        <!--<li><a href="#"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a></li>-->
        <li><a href="<?php esc_url($mail); ?>"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
    </ul>
    </div><!-- #sidebar-social-icons -->
</div>
