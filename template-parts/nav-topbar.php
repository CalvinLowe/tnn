<?php
/**
 * Template part for displaying the topbar navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TNN
 */

?>

<div id="topbar-social-icons" class="social-icons">
  <ul>
    <li><a href="#">Facebook</a></li>
    <li><a href="#">Instagram</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Cart</a></li>
  </ul>
</div><!-- #topbar-social-icons -->

<div id="topbar-search" class="search">
  <?php get_search_form() ?>
</div><!-- #topbar-search -->

<div id="topbar-cta-buttons" class="cta">
  <a href="#">Client Login/Appointment</a>
  <a href="#">Join TNN's Team</a>
</div><!-- #topbar-cta-buttons -->
