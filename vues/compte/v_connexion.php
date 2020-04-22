<?php
if(isset($_REQUEST['envoie'])) {
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$motdepasse = crypt($password,'salt');
	$req_check = $bdd->query('SELECT * FROM utilisateur');
	while ($utilisateur = $req_check->fetch()) {
		if($username == $utilisateur['identifiant'] && $motdepasse == $utilisateur['motdepasse']) {
			$_SESSION['membre'] = recupererUtilisateur($bdd,$utilisateur['id']);
			if($_SESSION['membre']['statut'] == 'admin') {
				$estadmin = $_SESSION['membre']['statut'];
			}
			elseif($_SESSION['membre']['statut'] == 'prof') {
				$estprof = $_SESSION['membre']['statut'];
			}
		}
		else {
			$erreurs = "Vos identifiants sont incorrectes.";
		}
	}
	if(isset($erreurs)) {
		?>
		<div class="erreurs"><?php echo $erreurs; ?></div>
		<?php
	}
	else {
		?>
		<div class="erreurs">Vous êtes connecté !</div>
		<?php
	}
}
if(isset($_SESSION['membre'])) {
	if($_SESSION['membre']['statut'] == 'admin') {
		$estadmin = $_SESSION['membre']['statut'];
	}
	elseif($_SESSION['membre']['statut'] == 'prof') {
		$estprof = $_SESSION['membre']['statut'];
	}
}
?>
