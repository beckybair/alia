<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alia
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?></p>
			</div>

			<nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav>

			<div class="footer-center">
				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Alia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'Alia' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'Alia' ), 'Alia', '<a href="http://underscores.me/" rel="designer">Becky Bair</a>' ); ?>
				</p>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
