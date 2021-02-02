<?php 
add_theme_support('post-thumbnail');

// Project: custom post type function
function create_posttype() {
 
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
add_action( 'init', 'create_posttype' );