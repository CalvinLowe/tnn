<?php
/**
 * Template part for displaying the front page sponsors
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="front-page-sponsors-advertising">
  <h2 class="section-title section-title-small"><?php the_field('sponsors_title'); ?></h2>
  <div class="sponsors-logos">

    <a href="<?php the_field('sponsors_link_1'); ?>">
    <?php
    $image1 = get_field('sponsors_img_1');

    if( !empty($image1) ): ?>

      <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />

    <?php endif; ?>
  </a><!-- Sponsor 1 -->

    <a href="<?php the_field('sponsors_link_2'); ?>">
    <?php
    $image2 = get_field('sponsors_img_2');

    if( !empty($image2) ): ?>

      <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />

    <?php endif; ?>
    </a><!-- Sponsor 2 -->

    <a href="<?php the_field('sponsors_link_3'); ?>">
    <?php
    $image3 = get_field('sponsors_img_3');

    if( !empty($image3) ): ?>

      <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />

    <?php endif; ?>
    </a><!-- Sponsor 3 -->

    <a href="<?php the_field('sponsors_link_4'); ?>">
    <?php
    $image4 = get_field('sponsors_img_4');

    if( !empty($image4) ): ?>

      <img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>" />

    <?php endif; ?>
    </a><!-- Sponsor 4 -->

    <a href="<?php the_field('sponsors_link_5'); ?>">
    <?php
    $image5 = get_field('sponsors_img_5');

    if( !empty($image5) ): ?>

      <img src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image5['alt']); ?>" />

    <?php endif; ?>
    </a><!-- Sponsor 5 -->

    <a href="<?php the_field('sponsors_link_6'); ?>">
    <?php
    $image6 = get_field('sponsors_img_6');

    if( !empty($image6) ): ?>

      <img src="<?php echo esc_url($image6['url']); ?>" alt="<?php echo esc_attr($image6['alt']); ?>" />

    <?php endif; ?>
    </a><!-- Sponsor 6 -->

  </div>
</div>