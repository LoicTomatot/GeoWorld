<?php
try
	{
		$domaine = $_SERVER['SERVER_NAME'];
		if($domaine == "geoworld.fr")
		{
			$a = 'mysql:host=localhost;dbname=geoworld;charset=utf8';
			$b = 'root';
			$c = '';
		}
		else {
			$a = 'mysql:host=localhost;dbname=se_sheet_database;charset=utf8';
			$b = 'root';
			$c = '';
		}
		$bdd = new PDO($a, $b, $c);
	}
	catch (Exception $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}
?>
