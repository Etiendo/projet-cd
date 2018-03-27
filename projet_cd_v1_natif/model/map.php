<?php

Class Map {

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

    public static function getPoisGeneric() {
        
        $sql = "SELECT * FROM pois WHERE map_id =(SELECT map_id FROM maps WHERE user_id = 0)";

        $statement = self::createStatement($sql);

        if ($statement && $statement->execute()) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public static function getPois($id) {

        $sql = "SELECT * FROM maps INNER JOIN pois ON pois.map_id = maps.map_id WHERE maps.user_id = 0 OR maps.user_id = ?";

        $statement = self::createStatement($sql);

        if ($statement && $statement->execute(array($id))) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public static function addPoi($name, $lat, $lng, $map_id) {

        $sql = "INSERT INTO pois (name, lat, lng, map_id) VALUES (:name, :lat, :lng, :map_id)";   

        $statement = self::createStatement($sql);

        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':lat', $lat);
        $statement->bindParam(':lng', $lng);
        $statement->bindParam(':map_id', $map_id, PDO::PARAM_INT);

        $statement->execute();
    }

    public static function deletePoi($id) {

        $sql = "DELETE FROM pois WHERE poi_id = $id";

        $statement = self::createStatement($sql);

        $statement->execute();
    }

    public function editPoi($id, $name, $lat, $lng) {

        $sql = "UPDATE pois SET name = :name, lat = :lat, lng = :lng WHERE poi_id = :id";

        $statement = self::createStatement($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':lat', $lat);
        $statement->bindParam(':lng', $lng);

        if ($statement->execute()) {
            echo "POI modifié !";
        } else {
            echo "Modification non effectuée.";
        }
    }
}