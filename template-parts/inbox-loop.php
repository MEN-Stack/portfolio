<?php 
//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
    'post_type' => 'messages',
    'posts_per_page' => 5,
    'paged' => $paged
);
$query = new WP_Query($args);

while ( $query->have_posts() ) : $query->the_post(); 
?>
<h4 class="msg-title"><?php the_title(); ?></h4>   
<span class="msg-email"><?php the_excerpt(); ?></span>
<span class="msg-excerpt"><?php echo(wp_trim_words(get_the_content(), 7)); ?></span>
<?php endwhile; ?>
<style>
.pagination{
    padding: 0;
    border: 0;
    margin: 0;
}
</style>
<div class="pagination">
  <?php
    echo paginate_links( array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'total'        => $query->max_num_pages,
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
        'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
        'add_args'     => false,
        'add_fragment' => '',
    ) );
  ?>
</div>

