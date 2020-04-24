<?php
if(!isset($_REQUEST['ssaction'])) {
  $ssaction = "accueil";
}
else {
  $ssaction = $_REQUEST['ssaction'];
}
// On vérifie la valeur de l'action et on exécute celle correspondante
switch ($ssaction) {
  case 'accueil':
    include('vues/compte/prof/header_prof.php');
    include("vues/compte/prof/accueil_prof.php");
    break;

  case 'maj':
    include('vues/compte/prof/header_prof.php');
    include('vues/compte/prof/maj.php');
    break;

  default:
    include('vues/compte/prof/header_prof.php');
    include("vues/compte/prof/accueil_prof.php");
    break;
}

require_once 'javascripts.php';
require_once 'footer.php';
?>
