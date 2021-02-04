<?php get_header(); ?>
<?php
// print_r($_POST) 
$name = $_POST['user'];
$content = $_POST['message'];
$title = $_POST['user'];
$email = $_POST['user_email'];
$arr = array(
    'post_author' => $name,
    'post_excerpt' => $email,
    'post_content' => $content,
    'post_title' => $title,
    'post_type' => 'messages',
    'post_status' => 'publish',
);
wp_insert_post($arr, false, true);
?>

<h1>Thank you for your submission</h1>
<button onclick="window.location.href='<?php echo(get_bloginfo('url')); ?>'">HOME</button>
<?php get_footer(); ?>