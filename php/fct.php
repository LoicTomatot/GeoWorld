<?php
function recupererUtilisateur($bdd,$theid)
{
	$reponse = $bdd->query('SELECT * FROM utilisateur');
	$retour = NULL;
	while ($lesdonnees = $reponse->fetch())
	{
		if($lesdonnees['id'] == $theid)
		{
			unset($retour);
			$retour = array(
                'id' => $lesdonnees['id'] ,
                'statut' => $lesdonnees['statut'] ,
                'identifiant' => $lesdonnees['identifiant'] ,
                'motdepasse' => $lesdonnees['motdepasse'] ,
                'nom' => $lesdonnees['nom'] ,
                'prenom' => $lesdonnees['prenom'] ,
                'telephone' => $lesdonnees['telephone'] ,
                'mail' => $lesdonnees['mail']
                );
		}
	}
	$reponse->closeCursor();
	return $retour;
}

function recupererCodes($bdd)
{
	$reponse = $bdd->query('SELECT * FROM code_enseignant');
	$retour = NULL;
	while ($lesdonnees = $reponse->fetch())
	{
		$retour[] = $lesdonnees['code'];
	}
	$reponse->closeCursor();
	return $retour;
}
?>
