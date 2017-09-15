<?php
/**
 * Template part for displaying the topbar navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<div id="topbar-social-icons" class="topbar social-icons">
  <ul>
    <li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a></li>
  </ul>
</div><!-- #topbar-social-icons -->

<div id="topbar-search" class="search-topbar">
  <?php get_search_form() ?>
</div><!-- #topbar-search -->

<div id="topbar-cta-buttons" class="topbar front-cta cta">
  <a href="<?php esc_html_e( 'https://bit.ly/tnnonline', 'tnn' ); ?>"><?php esc_html_e( 'Client Login/Appointment', 'tnn' ); ?></a>
  <a href="<?php esc_html_e( '#subscribe', 'tnn' ); ?>"><?php esc_html_e( 'Join TNN&rsquo;s Team', 'tnn' ); ?></a>
</div><!-- #topbar-cta-buttons -->
