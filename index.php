<?php

// Routing

$page = $_GET['page'];

if (empty($_GET))
{
  include 'views/landing.php';
}

if ($page == 'signin')
{
  include 'controllers/signinController.php';
}






if ($page == 'login')
{
  include 'views/login.php';
  if(!empty($_POST))
  {
    header('Location: http://localhost:8888/wall_from_scratch/?page=wall'); // redirection
  }
}

if ($page == 'wall')
{
  include 'views/wall.php';
}