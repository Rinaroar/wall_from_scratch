<?php

/* Lien entre model et view */

require 'models/wallModel.php';

if ($_SESSION['user_id'])
{
  if (!empty($_POST['content']))
  {
    addWord();
    // evite que le mot se remette au refresh de la page
    unset($_POST['content']);
    header('Location: http://localhost:8888/wall_from_scratch/?page=wall');
  }
  $contents = getContent();
  require 'views/wall.php';
}
else
{
  echo 'Wrong information please';
  require 'views/login.php';
}