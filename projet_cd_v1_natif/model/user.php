<?php

Class User {

    private static function createStatement($sql) {

        require __DIR__.'/../config.php';

        try {
            //objet PDO utilisé pour la connexion à la BDD
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare($sql);
        } 
        catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        return $statement;
    }

    public static function inscription($name, $pwd) {
        
      $sql = 'INSERT INTO users (name, password) VALUES (:name, :password)';

        $statement = self::createStatement($sql);

        $statement->bindParam(':name', $name);
        $statement->bindParam(':password', $pwd);

        if ($statement->execute()) {
          echo "Inscription effectuée !";
      } else {
          echo "Inscription non effectuée";
      }
      return $statement;
    }

    public static function checkId($name, $pwd) {
        
        if (isset($name, $pwd)) {
            $sql = ("SELECT * FROM users WHERE name = '$name' AND password = '$pwd'");

            $statement = self::createStatement($sql);

            $statement->execute();

            $user_data = $statement->fetch();

            return $user_data;
        }

        return null;
    }
}