<?php  
require_once 'inc/manager-db.php';
$desContinents = getAllContinents();
?>

<form method="POST">
<label for="form-control form-control-sm">Choisissez un continent</label>
<select name="a" class="form-control form-control-sm">
	<?php foreach ($desContinents as $unContinent) {
		$leContinent = $unContinent->Continent ; 
		?>
		<option ><div class="dropdown-item" onclick="listePays('<?php echo $leContinent; ?>')"><?php echo $leContinent; ?></div></option>
	<?php
	}
	?> 
</select>
</form>
<?php 
if(isset($_POST['a'])) {

        $leContinentSelec = $leContinent;
        $desPays = getCountriesByContinent($leContinentSelec);
    ?>

    <label for="form-control form-control-sm">Choisissez un pays</label>
    <select class="form-control form-control-sm">
    <?php foreach ($desPays as $unPays) {
        echo $unPays->Name."<br />";
        } 
    }
?>
        
       






