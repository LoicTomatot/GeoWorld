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
    include('vues/compte/admin/header_admin.php');
    include("vues/compte/admin/accueil_admin.php");
    break;
  case 'gencode':
    include('vues/compte/admin/header_admin.php');
    include("vues/compte/admin/gen_code.php");
    break;
  case 'generation':
    include("vues/compte/admin/generation.php");
    break;
  default:
    include('vues/compte/admin/header_admin.php');
    include("vues/compte/admin/accueil_admin.php");
    break;
}

require_once 'javascripts.php';
require_once 'footer.php';
?>
