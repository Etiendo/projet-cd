<?php

require 'model/map.php';

$poisGeneric = Map::getPoisGeneric();

require 'model/user.php';

// on teste si nos variables sont définies

if (isset($_POST['name']) && $_POST['password']) {
    // on définit des variables pour les entrées dans le formulaire

    $name = $_POST['name'];
    $pwd = $_POST['password'];

    //on appelle la fonction checkId définie dans le model qui va vérifier les données de l'utilisateur dans la BDD. On stocke la vérification des données de l'utilisateur via la variable $user_data qui sera utilisée par la suite

    $user_data = User::checkId($name, $pwd);

    //si les données utilisateur sont différentes de null
    if ($user_data != null) {

        //on démarre la session utilisateur
        session_start();

        //on enregistre les paramètres de session de l'utilisateur (avec $_SESSION['login']) qui correspond à $name défini plus haut

        $_SESSION['name'] = $user_data['name']; //on vérifie le champs 'name' dans la BDD
        $_SESSION['password'] = $user_data['password'];
        $_SESSION['userid'] = $user_data['user_id'];

        //redirection vers la page d'accueil du membre
        header('location: /Projet_CD/projet_cd_v1_natif/controller/map_browse.php');
    } else {
        echo 'Ça marche pô';
    }
}

//on appelle la vue de la page de connexion utilisateur
require 'view/login.php';
