<?php

require '../model/map_browse.php';

$pois = getPois();

require '../model/page_membre.php';

require '../model/add_poi.php';

if (isset($_POST["submit"])) {
    session_start();
    $nom = $_POST['echoppe'];
    $lat = $_POST['latitude'];
    $lng = $_POST['longitude'];
    $map_id = getMapId();

    addPoi($nom, $latitude, $longitude);
}

require '../model/delete_poi.php';

require '../view/map_browse.php';
