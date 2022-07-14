<?php 


function hughesco_enqueue_theme_assets() {

    wp_enqueue_style('hughesco-css', get_stylesheet_directory_uri() . '/assets/styles/main.min.css');
   # wp_enqueue_script('panelsnap-js', get_stylesheet_directory_uri() . '/assets/scripts/panelsnap.js', false, false, true);

    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css');

    wp_enqueue_script('aos-js','https://unpkg.com/aos@next/dist/aos.js', false, false, true);
    wp_enqueue_script('hughesco-js', get_stylesheet_directory_uri() . '/assets/scripts/main.js', false, false, true);


    wp_deregister_style('wp-block-library'); 
    wp_deregister_style('global-styles-inline'); 
    wp_dequeue_style( 'global-styles' );


    

}

add_action( 'wp_enqueue_scripts', 'hughesco_enqueue_theme_assets', 9999 );

// Add title tag
add_theme_support( 'title-tag' );


// Remove Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove default W3 SVG
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );


// Remove WP Version number (Security reasons)
remove_action('wp_head', 'wp_generator');