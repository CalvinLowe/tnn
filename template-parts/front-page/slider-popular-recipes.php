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
  <h2 class="section-title section-title-large popular-recipes-title"><?php esc_html_e( 'Our most popular recipes', 'tnn' ); ?></h2>
</div>

<div class="popular-recipes-slider">

  <div class="popular-recipes-slider-cell">
    <a href="<?php get_field('recipes_slider_img_link_1') ?>">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php the_field('recipes_slider_title_1') ?></h3>
      </div>
        <?php
        $sliderImage1 = get_field('recipes_slider_img_1');
        if( !empty($sliderImage1) ): ?>
              <img class="slider-img" src="<?php echo $sliderImage1['url']; ?>" alt="<?php echo $sliderImage1['alt']; ?>" />
        <?php endif; ?>
    </a>
  </div>

  <div class="popular-recipes-slider-cell">
    <a href="<?php get_field('recipes_slider_img_link_2') ?>">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php the_field('recipes_slider_title_2') ?></h3>
      </div>
      <?php
      $sliderImage2 = get_field('recipes_slider_img_2');
      if( !empty($sliderImage2) ): ?>
            <img class="slider-img" src="<?php echo $sliderImage2['url']; ?>" alt="<?php echo $sliderImage2['alt']; ?>" />
      <?php endif; ?>
    </a>
  </div>

  <div class="popular-recipes-slider-cell">
    <a href="<?php get_field('recipes_slider_img_link_3') ?>">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php the_field('recipes_slider_title_3') ?></h3>
      </div>
      <?php
      $sliderImage3 = get_field('recipes_slider_img_3');
      if( !empty($sliderImage3) ): ?>
            <img class="slider-img" src="<?php echo $sliderImage3['url']; ?>" alt="<?php echo $sliderImage3['alt']; ?>" />
      <?php endif; ?>
    </a>
  </div>

  <div class="popular-recipes-slider-cell">
    <a href="<?php get_field('recipes_slider_img_link_4') ?>">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php the_field('recipes_slider_title_4') ?></h3>
      </div>
      <?php
      $sliderImage4 = get_field('recipes_slider_img_4');
      if( !empty($sliderImage4) ): ?>
            <img class="slider-img" src="<?php echo $sliderImage4['url']; ?>" alt="<?php echo $sliderImage4['alt']; ?>" />
      <?php endif; ?>
    </a>
  </div>

  <div class="popular-recipes-slider-cell">
    <a href="<?php get_field('recipes_slider_img_link_5') ?>">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php the_field('recipes_slider_title_5') ?></h3>
      </div>
      <?php
      $sliderImage5 = get_field('recipes_slider_img_5');
      if( !empty($sliderImage5) ): ?>
            <img class="slider-img" src="<?php echo $sliderImage5['url']; ?>" alt="<?php echo $sliderImage5['alt']; ?>" />
      <?php endif; ?>
    </a>
  </div>

</div> <!-- .banner-slider -->
