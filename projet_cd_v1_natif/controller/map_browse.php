<?php

session_start();

require 'page_membre.php';

require '../model/map.php';

$pois = Map::getPois($_SESSION['userid']);

require '../view/map_browse.php';