<?php  
require_once 'inc/manager-db.php';
$desContinents = getAllContinents();
?>

<form method="POST">
<label for="form-control form-control-sm">Choisissez un continent</label>
<select name="a" class="form-control form-control-sm">
    <option>-- Choisissez un continent --</option>
	<?php foreach ($desContinents as $unContinent) {
		$leContinent = $unContinent->Continent ; 
		?>
		<option onclick="listePaysProf('<?php echo $leContinent; ?>')" ><div class="dropdown-item"><?php echo $leContinent; ?></div></option>
	<?php
	}
	?> 
</select>
</form>
<div id="liste" class="container">
    <div>
      <?php if(isset($_POST['Continent'])) { 
        $leContinentSelec = $_POST['Continent'];
          ?>
        <h1>Les pays en <?php echo $leContinentSelec; ?> </h1>
      <div>
          <?php
            require_once 'inc/manager-db.php';
            $desPays = getCountriesByContinent($leContinentSelec);
           
           foreach ($desPays as $unPays) {
            echo "<a href='infospays-pays".$unPays->id.".html'>".$unPays->Name."</a><br/>";
           } 
        }
      ?>
      </div>
    </div>
</div>
        
       






