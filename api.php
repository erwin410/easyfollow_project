<?php
include('connexions.php');
$response = array();
if($db) {
    $sql = "SELECT * FROM users JOIN user_travail ON users.id=user_travail.id_user JOIN travail ON travail.id=user_travail.id_travail";
    $result = mysqli_query($db,$sql);
    if($result) {
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response[$x]['id'] = $row['id'];
            $response[$x]['nom'] = $row['nom'];
            $response[$x]['name'] = $row['name'];
            $response[$x]['email'] = $row['email'];
            $response[$x]['gain'] = $row['gain'];
            $response[$x]['nb_heure'] = $row['nb_heure'];
            $x++;



          


        }
        echo json_encode($response, JSON_PRETTY_PRINT);

    }
}
else {
    echo"Database connection failed";

}

?>