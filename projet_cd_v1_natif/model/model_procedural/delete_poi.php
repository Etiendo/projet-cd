<?php

function deletePoi($id) {

    require '../config.php';

     try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    try {
        $sql = "DELETE FROM pois WHERE poi_id = $id";

        $statement = $pdo->prepare($sql);

        if ($statement->execute()) {
            echo "POI supprimé de la liste !";
        }
        else {
            echo "Suppression échouée.";
        }

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}

header('location: map_browse.php');