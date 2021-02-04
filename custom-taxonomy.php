<?php
//hook into the init action and call create_project_type_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_project_type_nonhierarchical_taxonomy', 0 );
 
function create_project_type_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Project Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Project Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Project Types' ),
    'popular_items' => __( 'Popular Project Types' ),
    'all_items' => __( 'All Project Types' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Project Type' ), 
    'update_item' => __( 'Update Project Type' ),
    'add_new_item' => __( 'Add New Project Type' ),
    'new_item_name' => __( 'New Project Type Name' ),
    'separate_items_with_commas' => __( 'Separate project types with commas' ),
    'add_or_remove_items' => __( 'Add or remove project type' ),
    'choose_from_most_used' => __( 'Choose from the most used project type' ),
    'menu_name' => __( 'Project Type' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('project_type','projects',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'project_type' ),
  ));
}