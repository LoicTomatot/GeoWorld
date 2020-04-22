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
    include('vues/compte/header_compte.php');
    include("vues/compte/admin/accueil_admin.php");
    break;
  default:
    include('vues/compte/header_compte.php');
    include("vues/compte/admin/accueil_admin.php");
    break;
}

require_once 'javascripts.php';
require_once 'footer.php';
?>
