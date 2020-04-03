<?php
/* https://www.php.net/manual/fr/reserved.variables.server.php */
  $host = "http://$_SERVER[HTTP_HOST]/wall_from_scratch/";
  $url = $host . '?page=';
?>

  <h1>Signin</h1>
  <form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Signin</button>
  </form>
  <p>Already have an account?<a href="<?php echo $url . 'login'?>" alt="signin"> Let's log then.</a><p>
