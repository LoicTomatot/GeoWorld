<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="compte.html" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label><br />
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br />
                <br />
                <label><b>Mot de passe</b></label><br />
                <input type="password" placeholder="Entrer le mot de passe" name="password" required><br /><br />

                <input type="submit" id='submit' name="envoie" value='Se connecter'>
            </form>
        </div>
    </body>
</html>