<?php
# scripts
function theming_scripts()
{
    // CSS
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    //	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css' );	
    //	fonts
    wp_enqueue_style('google-font-overpass', 'https://fonts.googleapis.com/css2?family=Overpass:wght@100;200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('google-font-league-gothic', 'https://fonts.googleapis.com/css2?family=League+Gothic&display=swap');
    wp_enqueue_style('google-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200');
}

add_action('wp_enqueue_scripts', 'theming_scripts');

# removing smilies/emoticons
function cb_remove_smileys($bool)
{
    return false;
}
add_filter('option_use_smilies', 'cb_remove_smileys', 99, 1);

# overriding height/width attributes for featured images
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

# registering site menus
function register_custom_menu()
{
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'register_custom_menu');

add_theme_support( 'post-thumbnails' );

if (function_exists('add_theme_support')) {
    register_nav_menus(
        array(
            'sitenav' => __('Site nav'),
            'footnav' => __('Footer nav')
        )
    );
}