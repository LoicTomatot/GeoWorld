<?php
// On lance une session
session_start();
// On vérifie si une action est effectué
if(!isset($_REQUEST['action'])) {
  $action = "accueil";
}
else {
  $action = $_REQUEST['action'];
}
// On vérifie si l'action
switch ($action) {
  case 'accueil':
    include('header.php');
    include("vues/accueil.php");
    break;
  case 'todo':
    include('header.php');
    include("vues/todo-projet.php");
    break;
  case 'login':
    include("vues/login.php");
    break;
  case 'register':
    include("vues/register.php");
    break;
  
  default:
    include("vues/accueil.php");
    break;
}

require_once 'javascripts.php';
require_once 'footer.php';
?>
