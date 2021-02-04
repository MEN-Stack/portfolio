<?php 

// Project: custom post type function
function create_posttype_quotes() {
 
    register_post_type( 'quotes',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Quotes' ),
                'singular_name' => __( 'Quote' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'quotes'),
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-money-alt',
            'show_ui' => true
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_quotes' );

function create_posttype_projects() {
 
    register_post_type( 'projects',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-id-alt',
            'show_ui' => true
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_projects' );

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_messages' );

function create_posttype_messages() {
 
    register_post_type( 'messages',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Messages' ),
                'singular_name' => __( 'Message' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'messages'),
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-email',
            'show_ui' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'custom-fields',
                'author'
            )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_messages' );