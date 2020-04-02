<?php

/* Lien entre model et view */

require 'models/loginModel.php';

if (!empty($_POST['email']))
{
  $user = getUserData ();

  if (!empty($user))
  {
    $_SESSION['user_id'] = $user[0]['id'];
    header('Location: http://localhost:8888/wall_from_scratch/?page=wall'); // redirection
  }
  else
  {
    echo 'Wrong information';
    require 'views/login.php';
  }
}
else {
  require 'views/login.php';
}