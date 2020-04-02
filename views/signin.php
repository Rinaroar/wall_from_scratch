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
  <h1>Signin</h1>
  <form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Signin</button>
  </form>
  <a href="<?php echo $url . 'login'?>" alt="signin">Already have an account?</a>
</body>