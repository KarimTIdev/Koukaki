<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/sass/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/sass/theme.css'));
    wp_enqueue_script('menu-script', get_stylesheet_directory_uri() . '/assets/js/menu.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/menu.js'), true );
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), filemtime(get_stylesheet_directory() . '/assets/js/script.js'), true );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}