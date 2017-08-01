<?php
/**
 * Template part for displaying the popular-recipes slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<div class="popular-recipes-title-wrapper-1">
  <h2 class="section-title section-title-large popular-recipes-title">Our most popular recipes</h2>
</div>


<div class="popular-recipes-title-wrapper-2">
  <h3 class="popular-recipes-slide-title">Zucchini, Mint &amp; Feta Fritters</h3>
</div>
<img class="slider-img" alt="slider image" src="http://the-natural-nutritionist.dev/wp-content/themes/tnn/img/popular-recipes-slider.jpg">


<div class="popular-recipes-slider">

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
