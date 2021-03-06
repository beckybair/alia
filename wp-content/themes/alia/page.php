<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alia
 */

 get_header(); ?>

 	<div id="primary" class="page-content">
 		<div id="content" role="main">
 			<?php while ( have_posts() ) : the_post(); ?>
             <h2><?php the_title(); ?></h2>
 				<?php the_content(); ?>
 			<?php endwhile; // end of the loop. ?>

 		</div><!-- #content -->
 	</div><!-- #primary -->

 <?php get_footer(); ?>
