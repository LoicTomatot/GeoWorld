<?php
$req_select_users = $bdd->query("SELECT * FROM utilisateur");
?>
<main role="main" class="flex-shrink-0">
  	<h1>Liste des utilisateurs existants</h1>
  	<form id="formulaire_selectusers" method="post" action="compte-action_gestion_users.html" >
	  	<select id="selectusers" class="form-control form-control-sm" required>
	          <option value="" selected>-- Gérer --</option>
	          <option value="edit">Modifier</option>
	          </div>
	    </select>
	    <input id="execute_button" type="submit" name="execute" value="Exécuter">
	</form>
	<table>
	    <tr>
			<th>Sélectionner</th>
			<th>Permissions</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Email</th>
			<th>Action</th>
	    </tr>
	    <?php
	    while($user = $req_select_users->fetch()) {
		    ?>
		    <tr>
			    <td><input formtarget="formulaire_selectusers" type="checkbox" name="usersSelected[]" value="<?php echo $user['id']; ?>" required></td>
			    <td><?php echo $user['statut']; ?></td>
			    <td><?php echo $user['nom']; ?></td>
			    <td><?php echo $user['prenom']; ?></td>
			    <td><?php echo $user['mail']; ?></td>
			    <td><a href="compte-editusers.html"></a></td>
			</tr>
			<?php
		}
		$req_select_users->closeCursor();
		?>
	</table>
</main>
