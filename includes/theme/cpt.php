<?php

function hughesco_create_post_types() {

    gbc_create_post_type(array(
        'singular' => 'Service',
        'plural'   => 'Services',
        'icon'      => 'dashicons-screenoptions'
    ));


}

function hughesco_post_metaboxes() {
    // remove_meta_box( 'authordiv','service','normal' ); // Author Metabox
    // remove_meta_box( 'commentstatusdiv','service','normal' ); // Comments Status Metabox
    // remove_meta_box( 'commentsdiv','service','normal' ); // Comments Metabox
    // remove_meta_box( 'postcustom','service','normal' ); // Custom Fields Metabox
    // remove_meta_box( 'postexcerpt','service','normal' ); // Excerpt Metabox
    // remove_meta_box( 'revisionsdiv','service','normal' ); // Revisions Metabox
    // remove_meta_box( 'link','service','normal' ); // Slug Metabox
    // remove_meta_box( 'trackbacksdiv','service','normal' ); // Trackback Metabox
}

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'service') return false;
    return $current_status;
}

add_action('admin_menu','hughesco_post_metaboxes');
add_action( 'init', 'hughesco_create_post_types' );



 

function gbc_create_post_type($postType){

    $singular = $postType['singular'];
    $plural = $postType['plural'];
    $icon = $postType['icon'];

    $labels = array(
        'name'                  => _x( $plural, 'Post type general name', 'hughesco' ),
        'singular_name'         => _x(  $singular, 'Post type singular name', 'hughesco' ),
        'menu_name'             => _x( $plural, 'Admin Menu text', 'hughesco' ),
        'name_admin_bar'        => _x(  $singular, 'Add New on Toolbar', 'hughesco' ),
        'add_new'               => __( 'Add New', 'hughesco' ),
        'add_new_item'          => __( 'Add New ' . $singular, 'hughesco' ),
        'new_item'              => __( 'New ' . $singular, 'hughesco' ),
        'edit_item'             => __( 'Edit ' . $singular, 'hughesco' ),
        'view_item'             => __( 'View ' . $singular, 'hughesco' ),
        'all_items'             => __( 'All '.$plural.'', 'hughesco' ),
        'search_items'          => __( 'Search '.$plural.'', 'hughesco' ),
        'parent_item_colon'     => __( 'Parent '.$plural.':', 'hughesco' ),
        'not_found'             => __( 'No '.$plural.' found.', 'hughesco' ),
        'not_found_in_trash'    => __( 'No '.$plural.' found in Trash.', 'hughesco' ),
        'featured_image'        => _x( $singular . ' Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'hughesco' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'hughesco' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'hughesco' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'hughesco' ),
        'archives'              => _x( $singular . ' archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'hughesco' ),
        'insert_into_item'      => _x( 'Insert into ' . $singular, 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'hughesco' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this ' . $singular, 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'hughesco' ),
        'filter_items_list'     => _x( 'Filter '.$plural.' list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'hughesco' ),
        'items_list_navigation' => _x( $plural.' list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'hughesco' ),
        'items_list'            => _x( $plural.' list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'hughesco' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_in_rest' => true,

        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' =>  sanitize_title_with_dashes($singular) ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'   => $icon,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
 
    register_post_type(  sanitize_title_with_dashes($singular), $args );
}


function gbc_create_taxonomy($tax){

    $singular = $tax['singular'];
    $plural = $tax['plural'];
    $postType = $tax['postType'];

    $labels = array(
        'name' => _x( $plural, 'taxonomy general name' ),
        'singular_name' => _x( ''.$singular, 'taxonomy singular name' ),
        'search_items' =>  __( 'Search '.$plural ),
        'all_items' => __( 'All '.$plural ),
        'parent_item' => __( 'Parent '.$singular ),
        'parent_item_colon' => __( 'Parent '.$singular.':' ),
        'edit_item' => __( 'Edit '.$singular), 
        'update_item' => __( 'Update '.$singular ),
        'add_new_item' => __( 'Add New '.$singular ),
        'new_item_name' => __( 'New '.$singular.' Name' ),
        'menu_name' => __( $plural ),
      );    
     
    // Now register the taxonomy
      register_taxonomy(sanitize_title_with_dashes($plural),array($postType), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => sanitize_title_with_dashes($singular) ),
      ));
}
