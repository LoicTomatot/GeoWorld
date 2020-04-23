<?php
$req_select_users = $bdd->query("SELECT * FROM utilisateur");
?>
<main role="main" class="flex-shrink-0">
  	<h1>Liste des utilisateurs existants</h1>
  	<!-- <a class="btn btn-secondary" href="compte-editusers.html">Gérer</a> -->
	<table>
	    <tr>
			<th>Sélectionner</th>
			<th>Permissions</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
	    </tr>
	    <?php
	    while($user = $req_select_users->fetch()) {
		    ?>
		    <tr>
			    <td><input type="checkbox" name="usersSelected[]" value="<?php echo $user['id']; ?>" required></td>
			    <td><?php echo $user['statut']; ?></td>
			    <td><?php echo $user['nom']; ?></td>
			    <td><?php echo $user['prenom']; ?></td>
			    <td><?php echo $user['mail']; ?></td>
			</tr>
			<?php
		}
		$req_select_users->closeCursor();
		?>
	</table>
</main>
