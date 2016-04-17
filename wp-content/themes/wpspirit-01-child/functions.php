<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//

// Register second sidebar - for on Front Page template
register_sidebar( array(
 'name' =>__( 'Homepage sidebar', 'homepage-sidebar'),
 'id' => 'sidebar-2',
 'description' => __( 'Appears on the static front page template', 'homepage-sidebar' ),
 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 'after_widget' => '</aside>',
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
) );
