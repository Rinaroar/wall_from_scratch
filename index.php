<?php
session_start();

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
  include 'controllers/loginController.php';
}

if ($page == 'wall')
{
  include 'views/wall.php';
}