<?php
//on définit la fonction qui servira à vérifier les infos présentes dans la BDD

function checkId($name, $pwd)
{
    require 'config.php'; //import du fichier de config de la BDD

    try {
        //objet PDO utilisé pour la connexion à la BDD
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    //requête SQL si name et password sont bien entrés par l'utilisateur
    if (isset($name, $pwd)) {
        $sql = ("SELECT * FROM users WHERE name = '$name' AND password = '$pwd'");

        //préparation requête
        $statement = $pdo->prepare($sql);

        //exécution requête
        $statement->execute();

        //récupération des résultats
        $user_data = $statement->fetch();

        //on renvoie les données récupéréres
        return $user_data;
    }
    return null;
}
