<?php
/**
 * Template part for displaying the front page banner slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<?php
/* Variables */
$image1 = get_field('banner_slider_img_1');
$image1mb = get_field('banner_slide_1_mb');
$image2 = get_field('banner_slider_img_2');
$image2mb = get_field('banner_slide_2_mb');
$image3 = get_field('banner_slider_img_3');
$image3mb = get_field('banner_slide_3_mb');
$link1 = get_field('banner_slide_link_1');
$link2 = get_field('banner_slide_link_2');
$link3 = get_field('banner_slide_link_3');

$enable_slide_1 = get_field('enable_slide_1');

if( !empty($image1) || !empty($image2) || !empty($image3) ): ?>
<div class="slider banner-slider">

  <?php if( !empty($image1) && $enable_slide_1 ): ?>
  <div class="banner-slider-cell">
    <a href="<?php echo esc_url($link1); ?>">
    <img
    class="slider-img"
    data-flickity-lazyload-srcset="<?php echo esc_url($image1['url']); ?> 1920w, <?php echo esc_url($image1mb['url']); ?> 600w"
    sizes="(min-width: 600px) 720px, 360px"
    alt="<?php echo esc_attr($image1['alt'], 'tnn'); ?>" />
    </a>
  </div>
  <?php endif; ?>

  <?php if( !empty($image2) ): ?>
  <div class="banner-slider-cell">
    <a href="<?php echo esc_url($link2); ?>">
    <img
    class="slider-img"
    data-flickity-lazyload-srcset="<?php echo esc_url($image2['url']); ?> 1920w, <?php echo esc_url($image2mb['url']); ?> 600w"
    sizes="(min-width: 600px) 720px, 360px"
    alt="<?php echo esc_attr($image2['alt'], 'tnn'); ?>" />
    </a>
  </div>
  <?php endif; ?>

  <?php if( !empty($image3) ): ?>
  <div class="banner-slider-cell">
    <a href="<?php echo esc_url($link3); ?>">
    <img
    class="slider-img"
    data-flickity-lazyload-srcset="<?php echo esc_url($image3['url']); ?> 1920w, <?php echo esc_url($image3mb['url']); ?> 600w"
    sizes="(min-width: 600px) 720px, 360px"
    alt="<?php echo esc_attr($image3  ['alt'], 'tnn'); ?>" />
    </a>
  </div>
  <?php endif; ?>

</div>
<?php endif; ?>