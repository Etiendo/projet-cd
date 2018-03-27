<?php

require '../model/map.php';

$id = $_GET['id']; //équivalent à $_GET['id'=<?php echo $poi['poi_id']]

if (isset($_POST["submit"])) {
    
    Map::deletePoi($id);

    header('location: map_browse.php');
}