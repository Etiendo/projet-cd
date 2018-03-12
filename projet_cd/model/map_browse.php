<?php

session_start();

function getPois()
{
    require '../config.php';

    try {
        //objet PDO utilisé pour la connexion à la BDD
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $sql = "SELECT * FROM pois WHERE poi_id = poi_id";
    $statement = $pdo->prepare($sql);

    if ($statement->execute(array('poi_id'))) { // on récupère les valeurs de poi_id issues de la réquête sql que l'on va stocker dans un tableau (équivalent aussi à array('poi_id' => $_GET['poi_id']))
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
