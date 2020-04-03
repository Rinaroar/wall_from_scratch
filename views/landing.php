<?php
/* https://www.php.net/manual/fr/reserved.variables.server.php */
  $host = "http://$_SERVER[HTTP_HOST]/wall_from_scratch/";
  $url = $host . '?page=';
?>

<h1 class="home">Hello User</h1>
<p class="intro"> This is a PHP Vanilla project which consists of registering, logging in and writing a sweet word on a wall shared with other users.
  <br> This site is still in progress, so please be kind :)</p>
<p> Get started and <a href="<?php echo $url . 'signin'?>" alt="signin">Sign here</a>!</p>
