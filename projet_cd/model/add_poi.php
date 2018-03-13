<?php

function addPoi($name, $lat, $lng, $map_id) {

    require '../config.php';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $sql = "INSERT INTO pois (name, lat, lng, map_id) VALUES (:name, :lat, :lng, :map_id)";

    try {
        $statement = $pdo->prepare($sql);

        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':lat', $lat);
        $statement->bindParam(':lng', $lng);
        $statement->bindParam(':map_id', $map_id, PDO::PARAM_INT);

        if ($statement->execute()) {
            echo "POI ajouté !";
        } else {
            echo "Ajout non effectué";
        }
        
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}

// header('location: map_browse.php');
