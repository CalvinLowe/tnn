<?php
/**
 * Template part for displaying the front page banner slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="banner-slider">

  <div class="banner-slider-cell">
    <a href="<?php get_field('banner_slider_img_link_1') ?>">
      <?php
      $sliderImage1 = get_field('banner_slider_img_1');
      if( !empty($sliderImage1) ): ?>
            <img class="slider-img" src="<?php echo $sliderImage1['url']; ?>" alt="<?php echo $sliderImage1['alt']; ?>" />
      <?php endif; ?>
    </a>
  </div>

  <div class="banner-slider-cell">
    <a href="<?php get_field('banner_slider_img_link_2') ?>">
    <?php
    $sliderImage2 = get_field('banner_slider_img_2');
    if( !empty($sliderImage2) ): ?>
          <img class="slider-img" src="<?php echo $sliderImage2['url']; ?>" alt="<?php echo $sliderImage2['alt']; ?>" />
    <?php endif; ?>
    </a>
  </div>

  <div class="banner-slider-cell">
    <a href="<?php get_field('banner_slider_img_link_3') ?>">
    <?php
    $sliderImage3 = get_field('banner_slider_img_3');
    if( !empty($sliderImage3) ): ?>
          <img class="slider-img" src="<?php echo $sliderImage3['url']; ?>" alt="<?php echo $sliderImage3['alt']; ?>" />
    <?php endif; ?>
  </a>
</div>

</div> <!-- .banner-slider -->
