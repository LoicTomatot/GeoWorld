<?php
$idpays = $_REQUEST['idpays'];
$req=$bdd->query('SELECT * FROM Country WHERE id ='.$idpays);

while($pays = $req->fetch()){
	/*
	echo $pays['LifeExpectancy'];
	echo $pays['GNP'];
	echo $pays['GNPOld'];
	echo $pays['LocalName'];
	echo $pays['HeadOfState'];
	echo $pays['Capital'];
	echo $pays['Code2'];
	*/
	?>
	<h1><?php echo $pays['Name']; ?></h1>
	<div>Situé sur le continent <?php echo $pays['Continent']; ?>, dans la région de <?php echo $pays['Region']; ?></div>
	<ul>
		<li>Année d'indépendance : <?php echo $pays['IndepYear']; ?></li>
		<li>Superficie : <?php echo $pays['SurfaceArea'] ?> km²</li>
		<li>Population totale : <?php echo $pays['Population'] ?></li>
		<li>Capitale : <?php echo $pays['Capital'] ?></li>
		<li>Forme de gouvernement : <?php echo $pays['GovernmentForm'] ?></li>
	</ul>
	<?php
}
$req->closeCursor();
?>