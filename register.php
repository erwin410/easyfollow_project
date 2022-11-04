<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <div class="flex">
        <h1 class="Login">Inscription</h1>

        <form name=RegisterForm class="Nom" method="post" action="http://www.easyfollow.hstn.me/user-authentication.php" onsubmit="OnUserSubmit()">
        <!-- <form name=RegisterForm class="Nom" method="post" action="user-authentication.php" onsubmit="OnUserSubmit()"> -->
            <label for="">Mail</label>
            <input name="Mail" placeholder="Entrer votre email" type="email" required/>
			
			<label for="">Nom d'utilisateur</label>
			<input name="ID" placeholder="Entrer votre nom d'utilisateur" required/>
			
            <label for="">Mot de passe</label>
            <input name="Password" placeholder="Entrer votre mot de passe" type="password" required/>
			
			<input name="AuthenticationType" value="Register" type="hidden" />
			
            <div class="bouton">
				<button class="mdl-button mdl-js-button mdl-button--raised">
				Envoyer
				</button>

				<button class="mdl-button mdl-js-button mdl-button--raised">
				Retour
				</button>
            </div>
        </form>

    </div>
	
	<div id=Out></div>
	
	<script>
		function OnUserSubmit(){
		
			//document.forms["RegisterForm"]["AuthenticationType"];
			
			//Side Effect: can null this out, in case there was a previous login
			window.sessionStorage.AuthentificationKey = null;

			return true;
		}

	</script>

</body>
</html>