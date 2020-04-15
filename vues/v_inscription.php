<?php
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$mail = $_REQUEST['mail'];
$telephone = $_REQUEST['tel'];
$code = $_REQUEST['code'];
$identifiant = $_REQUEST['identifiant'];
$motdepasse = crypt($_REQUEST['mdp'],'salt');
$confmotdepasse = crypt($_REQUEST['confmdp'],'salt');
$listeCodes = recupererCodes($bdd);
foreach ($listeCodes as $leCode) {
	if($code == $leCode) {
		$code_valide = $leCode;
	}
}
if(isset($code_valide)) {
	if($motdepasse == $confmotdepasse) {
		$req_del = $bdd->query('DELETE FROM code_enseignant WHERE code = '.$code_valide);
		$req_create = $bdd->prepare("INSERT INTO utilisateur(statut, identifiant, motdepasse, nom, prenom, telephone, mail) VALUES (:statut,:identifiant,:motdepasse,:nom,:prenom,:telephone,:mail)");
		$req_create->execute(array(
			"statut" => "prof",
			"identifiant" => $identifiant,
			"motdepasse" => $motdepasse,
			"nom" => $nom,
			"prenom" => $prenom,
			"telephone" => $telephone,
			"mail" => $mail
		));
		$connexion_reussie = 1;
	}
	else {
		$erreurs = "Mots de passes différents ";
	}
}
else {
	$erreurs = "Code rentré invalide ou inexistant";
}
if(isset($erreurs)) {
	?>
	<div class="erreurs"><?php echo $erreurs; ?></div>
	<?php
}
else {
	?>
	<div class="erreurs">Vous êtes inscrit ! Allez dans la section Login pour vous connectez.</div>
	<?php
}
?>
