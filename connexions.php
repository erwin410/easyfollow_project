<?php
//connection a la base de donnée 
try {
    $db = new mysqli("localhost", "root", "", "easyfollow"); 
 } 
 catch(Exception $e)
 {
     // En cas d'erreur, on affiche un message et on arrête tout
         die('Erreur : '.$e->getMessage());
 } ?>