<?php

function editPoi($id, $name, $lat, $lng) {
    
    require '../config.php';

     try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $sql = "UPDATE pois SET name = :name, lat = :lat, lng = :lng WHERE poi_id = :id";

    try {
        $statement = $pdo->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':lat', $lat);
        $statement->bindParam(':lng', $lng);

        if ($statement->execute()) {
            echo "POI modifié !";
        } else {
            echo "Modification non effectuée.";
        }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}