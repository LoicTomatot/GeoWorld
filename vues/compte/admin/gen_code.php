<main role="main" class="flex-shrink-0">
  	<h1>Générer un code</h1>
    <form action="compte-gencode.html" method="POST">
		Choisissez le nombre de codes que vous souhaitez générer.<br />
		<SELECT name="nbr_codes" size="1">
			<?php for ($i=1; $i <= 20; $i++) { 
				?>
				<OPTION <?php if($i == 1){echo 'selected';} ?>><?php echo $i; ?></OPTION>
				<?php
			}
			?>
		</SELECT>
		<br />
		<input type="submit" name="envoie_gencode" value="GÉNÉNER">
	</form>
	<?php
	if(isset($_REQUEST['envoie_gencode'])) {
		include('vues/compte/admin/generation.php');
	}
	?>
	<div id="liste_codes_existants">
		<h2>Liste des codes existants</h2>
		<?php
		$lesCodes = recupererCodes($bdd);
		if($lesCodes == NULL || empty($lesCodes)) {
			echo "Aucun code n'a été généré !";
		}
		else {
			foreach ($lesCodes as $code) {
				echo $code."<br />";
			}
		}
		?>
	</div>
</main>
