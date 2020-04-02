<?php

/* Lien entre model et view */

require 'models/wallModel.php';

if ($_SESSION['user_id'])
{
  if (!empty($_POST['content']))
  {
    addWord();
  }
  $contents = getContent();
  require 'views/wall.php';
}
else
{
  echo 'Wrong information';
  require 'views/login.php';
}