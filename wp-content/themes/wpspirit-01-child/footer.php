<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content
 *
 */

?>

	<footer class="website-footer zindex10 clearfix ">

		<section class="wrapper-website zindex10">

			<!--	bottom nav	-->
			<?php if ( is_active_sidebar( 'bottom_menu' ) ) : ?>
			<nav class="bottom_menu " role="navigation" <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_bottom_menu') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_bottom_menu_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'bottom_menu' ); ?>
			</nav>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'address' ) ) : ?>
			<div class="address " <?php if( get_theme_mod('animation') == '' && get_theme_mod('animation_address') == '1' ) : ?>data-sr="<?php echo get_theme_mod('animation_address_text') ; ?>"<?php endif; ?> >
				<?php dynamic_sidebar( 'address' ); ?>
			</div>
			<?php endif; ?>

		</section>								<!--			END OF WEBSITE-WRAPPER		-->

	</footer>						<!--			END OF WEBSITE-FOOTER 		-->

  <div class="js-copyright">
    <p>
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Alia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpspirit-01-child' ), 'WordPress' ); ?></a>
      <span class="sep"> | </span>
      <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpspirit-01-child' ), 'WPSpirit-01-Child', '<a href="http://www.template-joomspirit.com" rel="designer">Becky Bair</a>' ); ?>
    </p>
  </div>

	<?php wp_footer(); ?>

</body>
</html>
