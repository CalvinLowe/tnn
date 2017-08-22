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
  <?php
  $sliderImage1 = get_field('recipes_slider_img_1');
  if( !empty($sliderImage1) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php get_field('recipes_slider_img_link_1') ?>">
        <div class="popular-recipes-title-wrapper-2">
          <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_1')); ?></h3>
        </div>
        <img class="slider-img" src="<?php echo esc_html_e($sliderImage1['url']); ?>" alt="<?php echo esc_html_e($sliderImage1['alt']); ?>" />
      </a>
    </div>
  <?php endif; ?>
  <?php
  $sliderImage2 = get_field('recipes_slider_img_2');
  if( !empty($sliderImage2) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php get_field('recipes_slider_img_link_2') ?>">
        <div class="popular-recipes-title-wrapper-2">
          <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_2')); ?></h3>
        </div>
        <img class="slider-img" src="<?php echo esc_html_e($sliderImage2['url']); ?>" alt="<?php echo esc_html_e($sliderImage2['alt']); ?>" />
      </a>
    </div>
  <?php endif; ?>
  <?php
  $sliderImage3 = get_field('recipes_slider_img_3');
  if( !empty($sliderImage3) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php get_field('recipes_slider_img_link_3') ?>">
        <div class="popular-recipes-title-wrapper-2">
          <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_3')); ?></h3>
        </div>
        <img class="slider-img" src="<?php echo esc_html_e($sliderImage3['url']); ?>" alt="<?php echo esc_html_e($sliderImage3['alt']); ?>" />
      </a>
    </div>
  <?php endif; ?>
  <?php
  $sliderImage4 = get_field('recipes_slider_img_4');
  if( !empty($sliderImage4) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php get_field('recipes_slider_img_link_4') ?>">
        <div class="popular-recipes-title-wrapper-2">
          <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_4')); ?></h3>
        </div>
        <img class="slider-img" src="<?php echo esc_html_e($sliderImage4['url']); ?>" alt="<?php echo esc_html_e($sliderImage4['alt']); ?>" />
      </a>
    </div>
  <?php endif; ?>
  <?php
  $sliderImage5 = get_field('recipes_slider_img_5');
  if( !empty($sliderImage5) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php get_field('recipes_slider_img_link_5') ?>">
        <div class="popular-recipes-title-wrapper-2">
          <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_5')); ?></h3>
        </div>
        <img class="slider-img" src="<?php echo esc_html_e($sliderImage5['url']); ?>" alt="<?php echo esc_html_e($sliderImage5['alt']); ?>" />

      </a>
    </div>
  <?php endif; ?>
</div> <!-- .banner-slider -->

<!-- TODO Set up ACF for mobile slider images -->
<div class="popular-recipes-slider-mb">
  <div class="popular-recipes-slider-cell-mb">
    <a href="#">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_1')); ?></h3>
      </div>
      <img class="slider-img" alt="<?php echo esc_html_e($sliderImage1['alt']); ?>" src="/wp-content/themes/tnn/img/sliders/TNN_PopularRecipesImages_600x600_1.jpg" />
    </a>
  </div>
  <div class="popular-recipes-slider-cell-mb">
    <a href="#">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_2')); ?></h3>
      </div>
      <img class="slider-img" alt="<?php echo esc_html_e($sliderImage2['alt']); ?>" src="/wp-content/themes/tnn/img/sliders/TNN_PopularRecipesImages_600x600_2.jpg" />
    </a>
  </div>
  <div class="popular-recipes-slider-cell-mb">
    <a href="#">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_3')); ?></h3>
      </div>
      <img class="slider-img" alt="<?php echo esc_html_e($sliderImage3['alt']); ?>" src="/wp-content/themes/tnn/img/sliders/TNN_PopularRecipesImages_600x600_3.jpg" />
    </a>
  </div>
  <div class="popular-recipes-slider-cell-mb">
    <a href="#">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_4')); ?></h3>
      </div>
      <img class="slider-img" alt="<?php echo esc_html_e($sliderImage4['alt']); ?>" src="/wp-content/themes/tnn/img/sliders/TNN_PopularRecipesImages_600x600_4.jpg" />
    </a>
  </div>
  <div class="popular-recipes-slider-cell-mb">
    <a href="#">
      <div class="popular-recipes-title-wrapper-2">
        <h3 class="popular-recipes-slide-title"><?php esc_html_e(the_field('recipes_slider_title_5')); ?></h3>
      </div>
      <img class="slider-img" alt="<?php echo esc_html_e($sliderImage5['alt']); ?>" src="/wp-content/themes/tnn/img/sliders/TNN_PopularRecipesImages_600x600_5.jpg" />
    </a>
  </div>
</div> <!-- .banner-slider -->
