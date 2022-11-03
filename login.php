<?php
//connection a la base de donnée 
include('fonctions.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <?php
    var_dump($stmt);
    ?>

    <div class="flex">
        <h1 class="Login">Connexion</h1>
    
        
            
         
        <form class="Nom" action="login.php" method="post">
            <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
        <?php endif; ?>
            <label for="">Mail</label>
            <input id="email" name="Mail"placeholder="Entrer votre email" type="email">
            <label for="">Mot de passe</label>
            <input id="password" name="Mot de passe"placeholder="Entrer votre mot de passe" type="password">
            <a href="#"></a>
            
            
            <div class="bouton">
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised"> Connexion
                    
                    
            </div>    

                

            
        
            
            
            
           
    
        
        </form>
        
  

    </div>
    
</body>
</html>