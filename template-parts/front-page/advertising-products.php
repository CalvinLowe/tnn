<?php
/**
 * Template part for displaying the front page advertising
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>


<figure class="product-advert">
  <a href="<?php the_field('product_1_link'); ?>">
  <?php
  $image1 = get_field('product_1_img');

  if( !empty($image1) ): ?>

  	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

  <?php endif; ?>
  </a>
</figure>

<figure class="product-advert">
  <a href="<?php the_field('product_2_link'); ?>">
  <?php
  $image2 = get_field('product_2_img');

  if( !empty($image2) ): ?>

  	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />

  <?php endif; ?>
  </a>
</figure>
