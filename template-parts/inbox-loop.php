<?php 
$args = array(
    "post_type" => "messages",
    "posts_per-page" => -1
);
$loop = new WP_Query($args);

while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<h4><?php the_title(); ?></h4>   
<?php the_excerpt(); ?> 
<?php the_content(); ?>
<?php endwhile; ?>
