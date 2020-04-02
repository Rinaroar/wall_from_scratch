<?php
session_start();

// Routing
$page = '';
if (!empty($_GET['page']))
{
  $page = $_GET['page'];
}

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
  include 'controllers/wallController.php';
}