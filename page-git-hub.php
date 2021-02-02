<?php
get_header();
// wp_remote_get( string $url, array $args = array() );

$gitURL = 'https://api.github.com/users/MEN-Stack/repos';
$response = wp_remote_get( esc_url_raw( $gitURL ) );
 
/* Will result in $api_response being an array of data,
parsed from the JSON response of the API listed above */
$api_response = json_decode( wp_remote_retrieve_body( $response ), true );
$repos = $api_response;
$avatar = $repos[0]['owner']['avatar_url'];
$username = $repos[0]['owner']['login'];
$account_url = $repos[0]['owner']['html_url'];
echo("<img src=".$avatar.">");
echo("<h3><a href=".$account_url.">".$username."</a></h3>");
?>
<!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/men-stack" data-size="large" aria-label="Follow @men-stack on GitHub">Follow @men-stack</a><?php

foreach($repos as $repo){
    echo('<ul>');
      echo("<li>".$repo['full_name']."</li>");
      echo("<li>".$repo['description']."</li>");
    echo('</ul>');
    }
?>
<footer>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</footer>
<?php get_footer(); ?>


