<?php
include('connexions.php');
header('Content-Type: application/json');

if ($db) {
    $nbheure = $db->query("SELECT * FROM users  WHERE users.id = 1;");

    while ( $row = $nbheure->fetch_assoc())  {
        $data[] = $row;
     }

echo json_encode($data, JSON_PRETTY_PRINT);
        }
else{
    echo "Database connection failed";
}