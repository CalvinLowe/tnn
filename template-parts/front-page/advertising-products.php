<?php
/**
 * Template part for displaying the front page advertising
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<?php
/* Variables */
$image1 = get_field('product_img_1');
$image2 = get_field('product_img_2');
$image3 = get_field('product_img_3');
$link1 = get_field('product_link_1');
$link2 = get_field('product_link_2');
$link3 = get_field('product_link_3');

if( !empty($image1) && !empty($image2) && !empty($image3) ): ?>
<div class="front-page-product-advertising">
<?php
  if( !empty($image1) && !empty($link1) ): ?>
  <figure class="product-advert">
    <a href="<?php the_field('product_link_1'); ?>">
        <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
    </a>
  </figure>
<?php endif; ?>

<?php
  if( !empty($image2) && !empty($link2) ): ?>
  <figure class="product-advert">
    <a href="<?php the_field('product_link_2'); ?>">
        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
    </a>
  </figure>
<?php endif; ?>

<?php
  if( !empty($image3) & !empty($link3) ): ?>
  <figure class="product-advert">
    <a href="<?php the_field('product_link_3'); ?>">
        <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
    </a>
  </figure>
<?php endif; ?>
</div>
<?php endif; ?>