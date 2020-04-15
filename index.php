<?php
// On lance une session
session_start();
require_once("vues/v_connectbdd.php");
require_once("php/fct.php");
// On vérifie si une action est effectué
if(!isset($_REQUEST['action'])) {
  $action = "accueil";
}
else {
  $action = $_REQUEST['action'];
}
// On vérifie la valeur de l'action et on exécute celle correspondante
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
    include('header.php');
    include("vues/login.php");
    break;
  case 'register':
    include('header.php');
    include("vues/register.php");
    break;
  case 'enregistrement':
    if(isset($_REQUEST['inscription'])) {
      include('header.php');
      include("vues/v_inscription.php");
      include("vues/register.php");
    }
    break;
  case 'compte':
    if(isset($_REQUEST['inscription'])) {
      include('vues/compte/header_compte.php');
      include("vues/register.php");
    }
    break;
  default:
    include('header.php');
    include("vues/accueil.php");
    break;
}

require_once 'javascripts.php';
require_once 'footer.php';
?>
