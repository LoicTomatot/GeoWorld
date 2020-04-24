<?php
$idpays = $_REQUEST['idpays'];
$req=$bdd->query('SELECT * FROM Country WHERE id ='.$idpays);
while($pays = $req->fetch()){
	echo $pays['Name'];
	echo $pays['Continent'];
	echo $pays['Region'];
	echo $pays['SurfaceArea'];
	echo $pays['IndepYear'];
	echo $pays['Population'];
	echo $pays['LifeExpectancy'];
	echo $pays['GNP'];
	echo $pays['GNPOld'];
	echo $pays['LocalName'];
	echo $pays['GovernmentForm'];
	echo $pays['HeadOfState'];
	echo $pays['Capital'];
	echo $pays['Code2'];
}
$req->closeCursor();
?>