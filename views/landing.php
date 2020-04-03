<?php
/* https://www.php.net/manual/fr/reserved.variables.server.php */
  $host = "http://$_SERVER[HTTP_HOST]/wall_from_scratch/";
  $url = $host . '?page=';
?>

<h1>Hello</h1>
<a href="<?php echo $url . 'signin'?>" alt="signin">Sign here</a>
