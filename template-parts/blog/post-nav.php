<?php
/**
 * Post navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNN
 */

?>

<nav id="post-nav" class="navigation post-navigation">
    <?php $prevPost = get_previous_post(true);
    if($prevPost) {?>
        <figure class="nav-box previous">
            <h3><?php esc_html_e('Read the previous post', 'tnn'); ?></h3>
            <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(200,200) );?>
            <?php previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); ?>
        </figure>
    
    <?php } $nextPost = get_next_post(true);
    if($nextPost) { ?>
        <figure class="nav-box next" style="float:right;">
            <h3><?php esc_html_e('Read the next post', 'tnn'); ?></h3>
            <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(200,200) ); } ?>
            <?php next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE); ?>
        </figure>
</nav><!--#post-nav -->