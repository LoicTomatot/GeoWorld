<?php
$idpays = $_REQUEST['idpays'];
$req=$bdd->query('SELECT * FROM Country WHERE id ='.$idpays);

while($pays = $req->fetch()){
	?>
	<h1><?php echo $pays['Name']; ?></h1>
	<div>Situé sur le continent <?php echo $pays['Continent']; ?>, dans la région de <?php echo $pays['Region']; ?></div>
	<ul>
		<li>Année d'indépendance : <?php echo $pays['IndepYear']; ?></li>
		<li>Superficie : <?php echo $pays['SurfaceArea'] ?> km²</li>
		<li>Population totale : <?php echo $pays['Population'] ?></li>
		<li>Capitale : <?php echo $pays['Capital'] ?></li>
		<li>Forme de gouvernement : <?php echo $pays['GovernmentForm'] ?></li>
		<li>Espérance de vie : <? echo $pays['LifeExpectancy'] ?></li>
		<li> GNP : <? echo $pays['GNP'] ?></li>
		<li> Ancien GNP : <? echo $pays['GNPOld'] ?></li>
		<li> Nom local : <? echo $pays['LocalName'] ?></li>
		<li> Chef de l'état : <? echo $pays['HeadOfState'] ?></li>
		<li>Code 2 : <? echo $pays['Code2'] ?></li>
	</ul>
	<?php
}
$req->closeCursor();
?>