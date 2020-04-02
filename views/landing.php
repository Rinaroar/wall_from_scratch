<?php
/* https://www.php.net/manual/fr/reserved.variables.server.php */
  $host = "http://$_SERVER[HTTP_HOST]/wall_from_scratch/";
  $url = $host . '?page=';
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Wall from scratch</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Hello</h1>
  <a href="<?php echo $url . 'signin'?>" alt="signin">Sign here</a>
</body>