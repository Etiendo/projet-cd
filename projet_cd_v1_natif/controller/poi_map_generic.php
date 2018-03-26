<?php

require '../model/map.php';

$poisGeneric = Map::getPoisGeneric();

$data = array();

foreach ($poisGeneric as $poi) {
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