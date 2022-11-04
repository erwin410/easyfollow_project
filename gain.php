<?php 
include('connexions.php');
header('Content-Type: application/json');

if ($db) {
    $gain = $db->query("SELECT SUM(gain) AS gain FROM `travail` JOIN user_travail ON travail.id = user_travail.id_travail JOIN users ON users.id = user_travail.id_user WHERE id_user = 1;");
    
    while ( $row = $gain->fetch_assoc())  {
        $data[] = $row;
     }
   
echo json_encode($data, JSON_PRETTY_PRINT);
        }
else{
    echo "Database connection failed";
}