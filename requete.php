<?php
include('connexions.php');
header('Content-Type: application/json');

if ($db) {
    $nbheure = $db->query("SELECT sum(nb_heure) as requete FROM `user_travail` WHERE id_user = 1");

    while ( $row = $nbheure->fetch_assoc())  {
        $data[] = $row;
     }

echo json_encode($data, JSON_PRETTY_PRINT);
        }
else{
    echo "Database connection failed";
}


