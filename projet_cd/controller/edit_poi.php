<?php

require '../model/edit_poi.php';

$id = $_GET['id']; //équivalent à $_GET['id'=<?php echo $poi['poi_id']]

if (isset($_POST['submit'])) {
    $name = $_POST['poi_name'];
    $lat = $_POST['poi_lat'];
    $lng = $_POST['poi_lng'];

    editPoi($id, $name, $lat, $lng);
}

require '../view/edit_poi.php';
