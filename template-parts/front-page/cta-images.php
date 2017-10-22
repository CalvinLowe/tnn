<?php
/**
 * Template part for displaying the front page call to action images
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="cta-images">
  <a class="cta-link" href="<?php the_field('cta_link_1') ?>">
  <figure class="cta-figure cta-figure-1">
    <?php

    $image1 = get_field('cta_img_1');

    if( !empty($image1) ): ?>

      <img src="<?php echo esc_url($image1['url'], 'tnn'); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />

    <?php endif; ?>
    <figcaption class="cta-caption"><h2 class="cta-caption-title"><?php esc_html_e(the_field('cta_heading_1'), 'tnn'); ?></h2></figcaption>
  </figure>
  </a>

  <a class="cta-link" href="<?php the_field('cta_link_2') ?>">
  <figure class="cta-figure cta-figure-2">
    <?php

    $image2 = get_field('cta_img_2');

    if( !empty($image2) ): ?>

      <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />

    <?php endif; ?>
    <figcaption class="cta-caption"><h2 class="cta-caption-title"><?php esc_html_e(the_field('cta_heading_2'), 'tnn'); ?></h2></figcaption>
  </figure>
  </a>

  <a class="cta-link" href="<?php the_field('cta_link_3') ?>">
  <figure class="cta-figure cta-figure-3">
    <?php

    $image3 = get_field('cta_img_3');

    if( !empty($image3) ): ?>

      <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />

    <?php endif; ?>
    <figcaption class="cta-caption"><h2 class="cta-caption-title"><?php esc_html_e(the_field('cta_heading_3'), 'tnn'); ?> <span><?php esc_html_e(the_field('cta_subheading_3'), 'tnn'); ?></span></h2></figcaption>
  </figure>
  </a>
</div>