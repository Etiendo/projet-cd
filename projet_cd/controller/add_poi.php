<?php

require '../model/add_poi.php';

$map_id = 1;

if (isset($_POST["submit"]) && $map_id !== 0) {

    $name = $_POST['echoppe'];
    $lat = $_POST['latitude'];
    $lng = $_POST['longitude'];

    addPoi($name, $lat, $lng, $map_id);
}