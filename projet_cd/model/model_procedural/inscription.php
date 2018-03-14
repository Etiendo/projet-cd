<?php

function inscriptionMap($name, $pwd)
{
    require '../config.php';

    //connexion BDD
    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    //requête SQL avec insertion données (try catch pour la gestion des erreurs)
  try { //insertion valeurs rentrées dans le formulaire dans les champs name password de la table users de la BDD
      $sql = 'INSERT INTO users (name, password) VALUES (:name, :password)';

      $statement = $pdo->prepare($sql);

      $statement->bindParam(':name', $name);
      $statement->bindParam(':password', $pwd);

      if ($statement->execute()) {
          echo "Inscription effectuée !";
      } else {
          echo "Inscription non effectuée";
      }
      return $statement;
  } catch (PDOException $e) {
      echo 'Connexion echouée : ' . $e->getMessage();
  }
}
