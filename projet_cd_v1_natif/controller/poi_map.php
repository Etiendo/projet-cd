<?php

session_start();

require '../model/map.php';

$pois = Map::getPois($_SESSION['userid']);

$data = array();

foreach ($pois as $poi) {
    $data[] = array (
        'type' => 'Feature',
        'properties' => array(
            'title' => ''.$poi['name'],
            'content' => ''.$poi['content'],
            'picture' => ''.$poi['picture'],
            'url' => ''.$poi['url'],
            'geometry' => array(
                'type' => 'Point',
                'coordinates' => array(
                    $poi['lng'],
                    $poi['lat']
                )
            )    
        )
    );
}

$geojson = json_encode($data);

echo($geojson);