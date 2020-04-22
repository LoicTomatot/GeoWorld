<?php
$listeNouvCodes = NULL;
$nbr_codes = $_REQUEST['nbr_codes'];
for ($n=0; $n < $nbr_codes; $n++) { 
	$nouvcode = rand(1000000,9999999);
	$req_insertcode = $bdd->prepare("INSERT INTO code_enseignant(code) VALUES (:code)");
	$req_insertcode->execute(array(
		"code" => $nouvcode
	));
	$req_insertcode->closeCursor();
	$listeNouvCodes[] = $nouvcode;
	unset($nouvcode);
}
if($listeNouvCodes == NULL || empty($listeNouvCodes)) {
	?>
	<div id="liste_codes">
		Aucun code n'a été généré.
	</div>
	<?php
}
else {
	?>
	<h2>Liste des codes générés</h2>
	<div id="liste_codes">
		<?php
		foreach ($listeNouvCodes as $code) {
			echo $code.'<br />';
		}
		?>
	</div>
	<?php
}
?>
