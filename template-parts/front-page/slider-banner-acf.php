<?php
/**
 * Template part for displaying the front page banner slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="slider">
  <div class="banner-slider">
    <div class="banner-slider-cell">
      <a href="<?php the_field('banner_slide_link_1') ?>">
        <?php
        $sliderImage1 = get_field('banner_slider_img_1');
        if( !empty($sliderImage1) ): ?>
              <img class="slider-img" src="<?php echo esc_url($sliderImage1['url'], 'tnn'); ?>" alt="<?php echo esc_attr($sliderImage1['alt']); ?>" />
        <?php endif; ?>
      </a>
    </div> <!-- Slide 1 -->
    <div class="banner-slider-cell">
      <a href="<?php the_field('banner_slide_link_2') ?>">
      <?php
      $sliderImage2 = get_field('banner_slider_img_2');
      if( !empty($sliderImage2) ): ?>
            <img class="slider-img" src="<?php echo esc_url($sliderImage2['url'], 'tnn'); ?>" alt="<?php echo esc_attr($sliderImage2['alt']); ?>" />
      <?php endif; ?>
      </a>
    </div> <!-- Slide 2 -->
    <div class="banner-slider-cell">
      <a href="<?php the_field('banner_slide_link_3') ?>">
        <?php
          $sliderImage3 = get_field('banner_slider_img_3');
          if( !empty($sliderImage3) ): ?>
            <img class="slider-img" src="<?php echo esc_url($sliderImage3['url'], 'tnn'); ?>" alt="<?php echo esc_attr($sliderImage3['alt']); ?>" />
          <?php endif; ?>
      </a>
    </div> <!-- Slide 3 -->
  </div> <!-- .banner-slider -->

  <div class="banner-slider-mb">
    <?php
    $sliderImage1mb = get_field('banner_slide_1_mb');
    if( !empty($sliderImage1mb) ): ?>
      <div class="banner-slider-cell-mb">
        <a href="<?php the_field('banner_slide_link_1') ?>">
          <img class="slider-img" src="<?php echo esc_url($sliderImage1mb['url']); ?>" alt="<?php echo esc_attr($sliderImage1mb['alt']); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 1 -->
    <?php
    $sliderImage2mb = get_field('banner_slide_2_mb');
    if( !empty($sliderImage2mb) ): ?>
      <div class="banner-slider-cell-mb">
        <a href="<?php the_field('banner_slide_link_2') ?>">
          <img class="slider-img" src="<?php echo esc_url($sliderImage2mb['url'], 'tnn'); ?>" alt="<?php echo esc_attr($sliderImage2mb['alt']); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 2 -->
    <?php
    $sliderImage3mb = get_field('banner_slide_3_mb');
    if( !empty($sliderImage3mb) ): ?>
      <div class="banner-slider-cell-mb">
        <a href="<?php the_field('banner_slide_link_3') ?>">
          <img class="slider-img" src="<?php echo esc_url($sliderImage3mb['url'], 'tnn'); ?>" alt="<?php echo esc_attr($sliderImage3mb['alt']); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 3 -->
  </div> <!-- .banner-slider-mb -->
</div>
