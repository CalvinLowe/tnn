<?php
/**
 * Template part for displaying the front page recommended reading
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<h2 class="rr-title"><?php the_field('rr_title'); ?></h2>
<figure class="rr-advert">
  <a href="<?php the_field('rr_book_link_1'); ?>">
  <?php
  $image1 = get_field('rr_book_1');

  if( !empty($image1) ): ?>

  	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

  <?php endif; ?>
  </a>
</figure>

<figure class="rr-advert">
  <a href="<?php the_field('rr_book_link_2'); ?>">
  <?php
  $image2 = get_field('rr_book_img_2');

  if( !empty($image2) ): ?>

  	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />

  <?php endif; ?>
  </a>
</figure>

<figure class="rr-advert">
  <a href="<?php the_field('rr_book_link_3'); ?>">
  <?php
  $image3 = get_field('rr_book_img_3');

  if( !empty($image3) ): ?>

  	<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />

  <?php endif; ?>
  </a>
</figure>