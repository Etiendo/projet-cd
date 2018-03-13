<?php

function getPoisGeneric()
{
    require __DIR__.'/../config.php';

    try {
        //objet PDO utilisé pour la connexion à la BDD
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $sql = "SELECT * FROM pois WHERE map_id =(SELECT map_id FROM maps WHERE user_id = 0)";

    $statement = $pdo->prepare($sql);

    if ($statement->execute(array('user_id'))) { // on récupère les valeurs de poi_id issues de la réquête sql que l'on va stocker dans un tableau

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
