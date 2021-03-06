<?php
/**
 * Template part for displaying the front page sale notice
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>
<div class="sales-notice">
    <h2 class="sales-notice-title section-title-large"><?php esc_html_e('Sale On Now', 'tnn'); ?></h2>
    <a href="<?php echo esc_url('/store/books/the-real-food-athlete-gift-package/'); ?>" class="button"><?php esc_html_e('Buy one get one free', 'tnn'); ?></a>
    <p class="sales-notice-paragraph"><?php esc_html_e('Buy a copy of The Real Food Athlete and receive a complementary copy for a friend', 'tnn'); ?></p>
</div>