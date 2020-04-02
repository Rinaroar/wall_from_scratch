<?php

/* Lien entre model et view */

require 'models/signinModel.php';

if (! empty($_POST))
{
  registerUser($_POST);
  header('Location: http://localhost:8888/wall_from_scratch/?page=login'); // redirection
}
else {
  require 'views/signin.php';
}