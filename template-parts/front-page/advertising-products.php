<?php
/**
 * Template part for displaying the front page advertising
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="front-page-product-advertising">
  <figure class="product-advert">
    <a href="<?php the_field('product_1_link'); ?>">
    <?php
    $image1 = get_field('product_1_img');

    if( !empty($image1) ): ?>

      <img src="<?php echo esc_html_e($image1['url']); ?>" alt="<?php echo esc_html_e($image1['alt']); ?>" />

    <?php endif; ?>
    </a>
  </figure>

  <figure class="product-advert">
    <a href="<?php the_field('product_2_link'); ?>">
    <?php
    $image2 = get_field('product_2_img');

    if( !empty($image2) ): ?>

      <img src="<?php echo esc_html_e($image2['url']); ?>" alt="<?php echo esc_html_e($image2['alt']); ?>" />

    <?php endif; ?>
    </a>
  </figure>
</div>