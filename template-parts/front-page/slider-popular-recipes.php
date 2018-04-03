<?php
/**
 * Template part for displaying the popular-recipes slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<?php
/* Variables */
$image1 = get_field('recipes_slider_img_1');
$image1mb = get_field('recipes_slide_1_mb');
$image2 = get_field('recipes_slider_img_2');
$image2mb = get_field('recipes_slide_2_mb');
$image3 = get_field('recipes_slider_img_3');
$image3mb = get_field('recipes_slide_3_mb');
$image4 = get_field('recipes_slider_img_4');
$image4mb = get_field('recipes_slide_4_mb');
$image5 = get_field('recipes_slider_img_5');
$image5mb = get_field('recipes_slide_5_mb');
$title1 = get_field('recipes_slider_title_1');
$title2 = get_field('recipes_slider_title_2');
$title3 = get_field('recipes_slider_title_3');
$title4 = get_field('recipes_slider_title_4');
$title5 = get_field('recipes_slider_title_5');
$link1 = get_field('recipes_slider_img_link_1');
$link2 = get_field('recipes_slider_img_link_2');
$link3 = get_field('recipes_slider_img_link_3');
$link4 = get_field('recipes_slider_img_link_4');
$link5 = get_field('recipes_slider_img_link_5');

if( !empty($image1) && !empty($image2) && !empty($image3) && !empty($image4) && !empty($image5) ): ?>
<div class="slider popular-recipes">
  <div class="popular-recipes-title-wrapper-1">
    <h2 class="section-title section-title-large popular-recipes-title"><?php esc_html_e( 'Our most popular recipes', 'tnn'); ?></h2>
  </div>

    <div class="popular-recipes-slider">
    <?php if( !empty($image1) ): ?>
      <div class="popular-recipes-slider-cell">
        <a href="<?php the_field('recipes_slider_img_link_4') ?>">
          <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_4'), 'tnn' ); ?></h3>
          </div>
          <img class="slider-img" src="<?php echo esc_url( $sliderImage4['url'] ); ?>" alt="<?php echo esc_attr($sliderImage4['alt'] ); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 4 -->
    <?php
    $sliderImage5 = get_field('recipes_slider_img_5');
    if( !empty($sliderImage5) ): ?>
      <div class="popular-recipes-slider-cell">
        <a href="<?php the_field('recipes_slider_img_link_5') ?>">
          <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_5'), 'tnn' ); ?></h3>
          </div>
          <img class="slider-img" src="<?php echo esc_url( $sliderImage5['url'] ); ?>" alt="<?php echo esc_attr($sliderImage5['alt'] ); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 5 -->
  </div> <!-- .banner-slider -->

  <div class="popular-recipes-slider-mb">
    <?php
    $sliderImage1mb = get_field('recipes_slide_1_mb');
    if( !empty($sliderImage1mb) ): ?>
      <div class="popular-recipes-slider-cell-mb">
        <a href="<?php the_field('recipes_slider_img_link_1') ?>">
          <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_1'), 'tnn' ); ?></h3>
          </div>
          <img class="slider-img" src="<?php echo esc_url( $sliderImage1mb['url'] ); ?>" alt="<?php echo esc_attr($sliderImage1mb['alt'] ); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 1 -->
    <?php
    $sliderImage2mb = get_field('recipes_slide_2_mb');
    if( !empty($sliderImage2mb) ): ?>
      <div class="popular-recipes-slider-cell-mb">
        <a href="<?php the_field('recipes_slider_img_link_2') ?>">
          <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_2'), 'tnn' ); ?></h3>
          </div>
          <img class="slider-img" src="<?php echo esc_url( $sliderImage2mb['url'] ); ?>" alt="<?php echo esc_attr($sliderImage2mb['alt'] ); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 2 -->
    <?php
    $sliderImage3mb = get_field('recipes_slide_3_mb');
    if( !empty($sliderImage3mb) ): ?>
      <div class="popular-recipes-slider-cell-mb">
        <a href="<?php the_field('recipes_slider_img_link_3') ?>">
          <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_3'), 'tnn' ); ?></h3>
          </div>
          <img class="slider-img" src="<?php echo esc_url( $sliderImage3mb['url'] ); ?>" alt="<?php echo esc_attr($sliderImage3mb['alt'] ); ?>" />
        </a>
      </div>
    <?php endif; ?><!-- Slide 3 -->
    <?php
    $sliderImage4mb = get_field('recipes_slide_4_mb');
    if( !empty($sliderImage4mb) ): ?>
      <div class="popular-recipes-slider-cell-mb">
        <a href="<?php the_field('recipes_slider_img_link_4') ?>">
          <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_4'), 'tnn' ); ?></h3>
          <img class="slider-img" src="<?php echo esc_url( $sliderImage4mb['url'] ); ?>" alt="<?php echo esc_attr($sliderImage4mb['alt'] ); ?>" />
        </a>
      </div>
      <img
      class="slider-img"
      data-flickity-lazyload-srcset="<?php echo esc_url($image4['url']); ?> 1920w, <?php echo esc_url($image4mb['url']); ?> 600w"
      sizes="(min-width: 600px) 720px, 360px"
      alt="<?php echo esc_attr($image4['alt'], 'tnn'); ?>" />
      </a>
    </div>
    <?php endif; ?>
 
    <?php if( !empty($image5) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php echo esc_url($link5); ?>">
      <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(($title5), 'tnn'); ?></h3>
      </div>
      <img
      class="slider-img"
      data-flickity-lazyload-srcset="<?php echo esc_url($image5['url']); ?> 1920w, <?php echo esc_url($image5mb['url']); ?> 600w"
      sizes="(min-width: 600px) 720px, 360px"
      alt="<?php echo esc_attr($image5['alt'], 'tnn'); ?>" />
      </a>
    </div>
    <?php endif; ?>  

  </div>
</div>
<?php endif; ?>