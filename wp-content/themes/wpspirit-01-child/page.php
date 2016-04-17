<?php
/**
 * The Template for displaying Pages
 *
 * @by JoomSpirit
 * 1.0
 *
 */

get_header();
get_template_part('after-header'); ?>

						<div class="site-info">
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'page' ); ?>
								<?php comments_template( '', true ); ?>

							<?php endwhile; // end of the loop. ?>
						</div>

<?php
get_template_part('before-footer');
get_footer(); ?>
