<?php 
// CODE: add_post_type_support( string $post_type, string|array $feature, mixed $args )
// Features include: ‘title’, ‘editor’, ‘comments’, ‘revisions’, ‘trackbacks’, 
// ‘author’, ‘excerpt’, ‘page-attributes’, 
// ‘thumbnail’, ‘custom-fields’, and ‘post-formats’.

// Additionally, the ‘revisions’ feature dictates whether the post type will store revisions, 
// and the ‘comments’ feature dictates whether the comments count will show on the edit screen.

// A third, optional parameter can also be passed along with a feature to provide 
// additional information about supporting that feature.

// ######## EXAMPLES #########
// add_post_type_support( 'my_post_type', 'comments' );
// add_post_type_support( 'my_post_type', array(
//     'author', 'excerpt',
// ) );
// add_post_type_support( 'my_post_type', 'my_feature', array(
//     'field' => 'value',
// ) );
$features = array( 'excerpt', 'custom-fields');
add_post_type_support('page', $features);
add_post_type_support('projects', $features);
