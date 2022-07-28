<?php 

include_once('includes/theme/cpt.php');


function hughesco_enqueue_theme_assets() {

    hughesco_enqueue_pre_load_fonts();

    wp_enqueue_style('hughesco-css', get_stylesheet_directory_uri() . '/assets/styles/main.min.css');
    # wp_enqueue_script('panelsnap-js', get_stylesheet_directory_uri() . '/assets/scripts/panelsnap.js', false, false, true);
    wp_enqueue_script('smooth-scrollbar-js',     'https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js', false, false, true);


    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css');

    wp_enqueue_script('aos-js','https://unpkg.com/aos@next/dist/aos.js', false, false, true);
    
    if (is_front_page()) {
        wp_enqueue_script('hughesco-js', get_stylesheet_directory_uri() . '/assets/scripts/main.js', false, false, true);

    }


    wp_deregister_style('wp-block-library'); 
    wp_deregister_style('global-styles-inline'); 
    wp_dequeue_style( 'global-styles' );


}

add_action( 'wp_enqueue_scripts', 'hughesco_enqueue_theme_assets', 9999 );

function hughesco_pre_load_font($preconnect = false, $cdn=false){
    if (!$cdn) { return; } 

    if ($preconnect) {
        echo ' <link rel="preconnect" href="'.$preconnect.'" crossorigin />';
    }

    echo '<link rel="preload" as="style" href="'.$cdn.'" />';

    echo '<link rel="stylesheet" href="'.$cdn.'" media="print" onload="this.media=\'all\'" />';

    echo '<noscript><link rel="stylesheet" href="'.$cdn.'" /></noscript>';
}

function hughesco_enqueue_pre_load_fonts() {

    hughesco_pre_load_font(
        'http://fonts.cdnfonts.com/',
        'http://fonts.cdnfonts.com/css/evangelina'
    );

}


// Add title tag
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


add_post_type_support( 'page', 'excerpt' );


// Remove Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove default W3 SVG
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );


// Remove WP Version number (Security reasons)
remove_action('wp_head', 'wp_generator');


function hughesco_get_services(){
    $servicesQuery = new WP_Query(array(
        'post_type'       => 'service',
        'posts_per_page'  => 12,
        'order'           => 'ASC'
      )); 

   return $servicesQuery;
}

// function test_template_part_hook($slug, $name, $args) {
//     wp_enqueue_script('this-is-a-test', get_stylesheet_directory_uri() . '/assets/styles/test.css');
// }

// add_action( 'get_template_part_template-parts/footer/site', 'test_template_part_hook', 10, 3 );

// add_action( 'get_template_part', 'wp_kama_get_template_part_slug_action', 10, 3 );

// /**
//  * Function for `get_template_part_(slug)` action-hook.
//  * 
//  * @param string      $slug The slug name for the generic template.
//  * @param string|null $name The name of the specialized template.
//  * @param array       $args Additional arguments passed to the template.
//  *
//  * @return void
//  */
// function wp_kama_get_template_part_slug_action( $slug, $name, $args ){

// 	echo $slug;
// }