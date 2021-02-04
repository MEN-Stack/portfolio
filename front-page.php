<?php get_header(); 
// $user = wp_get_current_user();
// $user_roles = $user->roles;
// $access = NULL;
// foreach($user_roles as $role){
//   if($role == 'administrator'){
//     $access = true;
//   }else{
//     $access = false;
//   }
// }
// if($access == true){
//   echo('<span><a href="http://terence-hastings.local/inbox">Inbox</a></span>');

// } ?> 
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of 




 get_footer();