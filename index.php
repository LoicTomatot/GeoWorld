<?php
session_start();
require_once 'header.php';
if(!isset($_REQUEST['action'])) {
  $action = "accueil";
}
else {
  $action = $_REQUEST['action'];
}
switch ($action) {
  case 'accueil':
    include("vues/accueil.php");
    break;
  case 'todo':
    include("vues/todo-project.php");
    break;
  case 'login':
    include("vues/login.php");
    break;
  case 'register':
    include("vues/register.php");
    break;
  case 'todo':
    include("vues/todo-project.php");
    break;
  
  default:
    include("vues/accueil.php");
    break;
}

require_once 'javascripts.php';
require_once 'footer.php';
?>
