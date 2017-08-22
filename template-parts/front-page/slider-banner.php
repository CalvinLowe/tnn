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
            <img class="slider-img" src="<?php echo esc_html_e($sliderImage1['url']); ?>" alt="<?php echo esc_html_e($sliderImage1['alt']); ?>" />
      <?php endif; ?>
    </a>
  </div> <!-- Slide 1 -->
  <div class="banner-slider-cell">
    <a href="<?php get_field('banner_slider_img_link_2') ?>">
    <?php
    $sliderImage2 = get_field('banner_slider_img_2');
    if( !empty($sliderImage2) ): ?>
          <img class="slider-img" src="<?php echo esc_html_e($sliderImage2['url']); ?>" alt="<?php echo esc_html_e($sliderImage2['alt']); ?>" />
    <?php endif; ?>
    </a>
  </div> <!-- Slide 2 -->
  <div class="banner-slider-cell">
    <a href="<?php get_field('banner_slider_img_link_3') ?>">
      <?php
        $sliderImage3 = get_field('banner_slider_img_3');
        if( !empty($sliderImage3) ): ?>
          <img class="slider-img" src="<?php echo esc_html_e($sliderImage3['url']); ?>" alt="<?php echo esc_html_e($sliderImage3['alt']); ?>" />
        <?php endif; ?>
    </a>
  </div> <!-- Slide 3 -->
</div> <!-- .banner-slider -->

<!-- TODO Make mobile sliders into ACF -->
<div class="banner-slider-mb">
  <div class="banner-slider-cell-mb">
    <a href="#">
      <img class="slider-img" src="/wp-content/themes/tnn/img/sliders/TNN_BannerImages_600x600_1.jpg" alt="" />
    </a>
  </div> <!-- Slide 1 -->
  <div class="banner-slider-cell-mb">
    <a href="#">
      <img class="slider-img" src="/wp-content/themes/tnn/img/sliders/TNN_BannerImages_600x600_2.jpg" alt="" />
    </a>
  </div> <!-- Slide 2 -->
  <div class="banner-slider-cell-mb">
    <a href="#">
      <img class="slider-img" src="/wp-content/themes/tnn/img/sliders/TNN_BannerImages_600x600_3.jpg" alt="" />
    </a>
  </div> <!-- Slide 3 -->
</div> <!-- .banner-slider -->
