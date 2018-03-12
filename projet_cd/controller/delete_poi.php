<?php

require '../model/delete_poi.php';

$id = $_GET['id']; //équivalent à $_GET['id'=<?php echo $poi['poi_id']]

if (isset($_POST["submit"])) {
    deletePoi($id);
}