<?php

require '../model/map.php';

$map_id = 1;

if (isset($_POST["submit"]) && $map_id !== 0) {

    $name = $_POST['echoppe'];
    $lat = $_POST['latitude'];
    $lng = $_POST['longitude'];

    Map::addPoi($name, $lat, $lng, $map_id);

    header('location: map_browse.php');
}