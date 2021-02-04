<?php get_header(); 
$user = wp_get_current_user();
$user_roles = $user->roles;
$access = NULL;
foreach($user_roles as $role){
  if($role == 'administrator'){
    $access = true;
  }else{
    $access = false;
  }
}
if($access == true){
  echo('<span><a href="http://terence-hastings.local/inbox">Inbox</a></span>');

} ?> 






<?php get_footer(); ?>