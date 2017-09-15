<?php
/**
 * The footer social share & subscribe for posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNN
 */

?>

<div id="footer-social-share" class="blog-footer">
    <h3><?php echo esc_html_e('Share this article'); ?></h3>
	<div id="footer-social-icons" class="blog-footer social-icons">
    <ul>
        <?php $link = get_permalink(); ?>
        <li><a href="<?php esc_html_e('https://www.facebook.com/sharer.php?' . $link); ?>"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
        <li><a href="<?php esc_html_e('https://twitter.com/share?url=' . $link . '&text=' . get_the_title() . '&via=@natnutritionist'); ?>"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a></li>
        <li><a href="<?php esc_html_e('mailto:?subject=' . get_the_title() . '&body=' . get_the_excerpt() . '%0A%0A' . $link); ?>"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
    </ul>
    </div><!-- #sidebar-social-icons -->
    <hr>
    <h3><?php echo esc_html_e('Subscribe to the newsletter'); ?></h3>
    <a class="button" href="#subscribe"><?php echo esc_html_e('Subscribe'); ?></a>
</div><!-- #author-info -->
