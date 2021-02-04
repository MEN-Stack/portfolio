
<?php
get_header();
?>

<div class="entry-content">

<?php
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
?>
<h1>GitHub Repositories</h1><hr>
<?php
foreach($repos as $repo){
    // echo('<ul>');
      echo("<div><b><a href=".$repo['html_url'].">".$repo['name']."</a></b></div>");
      if($repo['description']){
      echo("<p>".$repo['description']."</p>");
      }
    // echo('</ul>');
    }
?>
<div>
<hr>
<p>
  <?php echo("<img src=".$avatar." style='border-radius: 50%; height: 100px; width: 100px;'>"); ?>
  <?php echo("@<a href='.$account_url.'>".$username."</a>"); ?>
</p>
</div>
<footer>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</footer>
<?php get_footer(); ?>
</div>


