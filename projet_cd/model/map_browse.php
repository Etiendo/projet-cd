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

    $sql = "SELECT * FROM maps INNER JOIN pois ON pois.map_id = maps.map_id WHERE maps.user_id = 0 OR maps.user_id = ?";
    
    $statement = $pdo->prepare($sql);

    if ($statement->execute(array($_SESSION['userid']))) { // on récupère les valeurs de poi_id issues de la réquête sql que l'on va stocker dans un tableau en prennant la variable globale $_SESSION comme clé primaire afin de la lier au user_id en cours
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
