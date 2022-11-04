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
    require('connexions.php');
    session_start();
    if (isset($_POST['email'])) {
        // var_dump($_POST);die("xx");
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($db, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db, $password);
        $query = "SELECT * FROM `users` WHERE email='$email' and password='" . $password . "'";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;

            header("Location: ./index.php");
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
    ?>
    <div class="flex">
        <h1 class="Login">Connexion</h1>

        <form class="Nom" action="login.php" method="POST" name="login">



            <label for="email">Mail</label>
            <input name="email" placeholder="Entrer votre email" type="email" id="email" required>

            <label for="password">Mot de passe</label>
            <input name="password" placeholder="Entrer votre mot de passe" type="password" id="password" required>


            
            <div class="bouton">
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised"> Connexion
                    
                    
            </div>   
            <a href="register.php">register</a> 
            <!-- si message d'erreur on l'affiche -->
            <?php if (!empty($message)) { ?>
                <p class="errorMessage"><?php echo $message; ?></p>
            <?php } ?>
        </form>
    </div>
</body>

</html>