<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/build/css/theme.css'
    );
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

require_once get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php';

