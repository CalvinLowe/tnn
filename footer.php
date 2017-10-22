<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNN
 */

?>

	</div><!-- #content -->
	
	<?php if ( !is_front_page() ): ?>
		<?php get_template_part( 'template-parts/common/mailchimp', 'opt-in'); ?>
	<?php endif; ?>

	<div class="goto-top">
		<a href="#"><i class="goto-top-angle fa fa-angle-up fa-5x" aria-hidden="true"></i></a>
	</div><!-- .goto-top -->

	<footer id="colophon" class="site-footer">

		<div id="footer-main-container" class="footer-main-container">

			<nav id="footer-navigation-1" class="footer-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-1',
						'menu_id'        => 'footer-menu-1',
					) );
				?>
			</nav><!-- #footer-navigation -->

			<div id="footer-social-icons" class="footer social-icons">
			  <ul>
			    <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
			    <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
			    <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
			    <li><a href="#"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
			    <li><a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a></li>
			  </ul>
			</div><!-- #footer-social-icons -->

		</div><!-- #footer-main-container -->

		<div class="site-info">
			<hr>
			<div id="tnn-copyright" class="copyright">
				<p><?php esc_html_e('Copyright &copy; 2017 -  ', 'tnn'); ?><?php echo date('Y'); ?><?php esc_html_e(' The Natural Nutritionist. ', 'tnn'); ?><a href="<?php esc_html_e('/terms-and-conditions', 'tnn'); ?>"><?php esc_html_e('Terms and Conditions', 'tnn') ?></a></p>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
