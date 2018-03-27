<?php

require '../model/map.php';

$id = $_GET['id']; //équivalent à $_GET['id'=<?php echo $poi['poi_id']]

if (isset($_POST['submit'])) {
    $name = $_POST['poi_name'];
    $lat = $_POST['poi_lat'];
    $lng = $_POST['poi_lng'];

    Map::editPoi($id, $name, $lat, $lng);
}

require '../view/edit_poi.php';
