<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
    </head>
    <body> 
        <fieldset>     
        <legend>Inscription</legend>
        <form method="post">
            
            <input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>   
            
            <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required> 
            
            <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>  
            
            <input type="text" placeholder="Numéro de téléphone" name="tel" value="<?php if(isset($tel)){ echo $tel; }?>" required>

            <input type="text" placeholder="Code enseignant" name="code" value="<?php if(isset($code)){ echo $code; }?>" required>
       </fieldset>
            
        <fieldset>
        	<legend>Authentification</legend>
            <input type="identifiant" placeholder="identifiant" name="identifiant" value="<?php if(isset($identifiant)){ echo $identifiant; }?>" required>

            <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
            <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
       </fieldset>

            <button type="submit" name="inscription">S'inscrire</button>
        </form>
    </body>
</html>