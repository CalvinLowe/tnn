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
        <a href="<?php echo esc_url($link1); ?>">
        <div class="popular-recipes-title-wrapper-2">
              <h3 class="popular-recipes-slide-title"><?php esc_html_e(($title1), 'tnn'); ?></h3>
        </div>
        <img
        class="slider-img"
        data-flickity-lazyload-srcset="<?php echo esc_url($image1['url']); ?> 1920w, <?php echo esc_url($image1mb['url']); ?> 600w"
        sizes="(min-width: 600px) 720px, 360px"
        alt="<?php echo esc_attr($image1['alt'], 'tnn'); ?>" />
        </a>
      </div>
    <?php endif; ?>

    <?php if( !empty($image2) ): ?>
      <div class="popular-recipes-slider-cell">
        <a href="<?php echo esc_url($link2); ?>">
        <div class="popular-recipes-title-wrapper-2">
              <h3 class="popular-recipes-slide-title"><?php esc_html_e(($title2), 'tnn'); ?></h3>
        </div>
        <img
        class="slider-img"
        data-flickity-lazyload-srcset="<?php echo esc_url($image2['url']); ?> 1920w, <?php echo esc_url($image2mb['url']); ?> 600w"
        sizes="(min-width: 600px) 720px, 360px"
        alt="<?php echo esc_attr($image2['alt'], 'tnn'); ?>" />
        </a>
      </div>
    <?php endif; ?>

    <?php if( !empty($image3) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php echo esc_url($link3); ?>">
      <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(($title3), 'tnn'); ?></h3>
      </div>
      <img
      class="slider-img"
      data-flickity-lazyload-srcset="<?php echo esc_url($image3['url']); ?> 1920w, <?php echo esc_url($image3mb['url']); ?> 600w"
      sizes="(min-width: 600px) 720px, 360px"
      alt="<?php echo esc_attr($image3['alt'], 'tnn'); ?>" />
      </a>
    </div>
    <?php endif; ?>

    <?php if( !empty($image4) ): ?>
    <div class="popular-recipes-slider-cell">
      <a href="<?php echo esc_url($link4); ?>">
      <div class="popular-recipes-title-wrapper-2">
            <h3 class="popular-recipes-slide-title"><?php esc_html_e(($title4), 'tnn'); ?></h3>
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