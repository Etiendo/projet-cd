<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="../assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Ma carte des échoppes</title>

</head>

<body>

    <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">My éshop !</a></h1>
        </div>
            
        <div id="menu">
            <ul>
                <li class="active">
                    <a href="#" acceskey="1">Accueil</a>
                </li>
                <li>
                    <a href="#" acceskey="2">Les échoppes</a>
                </li>
                <li>
                    <a href="#" acceskey="3">Articles</a>
                </li>
                <li>
                    <a href="#" acceskey="4">A propos</a>
                </li>
                <li>
                    <a href="#" acceskey="5">Nous contacter</a>
                </li>
                <li>
                    <form class="form-inline my-2 my-lg-0" accesskey="6">
                        <input class="form-control mr-sm-2" type="search" placeholder="Mon échoppe" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher mon échoppe</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

    <div id="banner"></div>
    <div id="page" class="container">
        <div class="row">
            <div class="col-9">
                <div class="mainbox">
                    <h2>Ma carte perso</h2>
                    <div class="box">
                        <div id="map" class="map"></div>
                        <span id="zoom">Trouvez votre échoppe !</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h2>Ajoutez votre échoppe !</h2>
                <form action="../controller/add_poi.php" method="post">
                    <p>Nom échoppe <input type="text" name="echoppe" /></p>
                    <p>Latitude <input type="value" name="latitude"  /></p>
                    <p>Longitude <input type="value" name="longitude" /></p>
                    <p><input type="submit" value="OK" name="submit" /></p>
                </form>
            </div>
        </div>

</br></br></br></br></br></br></br>

        <div class="row">
            <div class="col-3">
                <p>Nom de l'échoppe</p>
            </div>
              <div class="col-3">
                <p>Latitude</p>
            </div>
              <div class="col-3">
                <p>Longitude</p>
            </div>
          </div>
        <?php foreach ($pois as $poi) {
    ?>
          <div class="row">
              <div class="col-3">
                  <p><?php echo $poi['name']; ?></p>
              </div>
              <div class="col-3">
                  <p><?php echo $poi['lat']; ?></p>
              </div>
              <div class="col-3">
                  <p><?php echo $poi['lng']; ?></p>
              </div>
              <div class="col-2">
                <p><a href="../controller/edit_poi.php?id=<?php echo $poi['poi_id']; ?>">Modifier</a></p>
              </div>
              <div class="col-1">
                <form action="../controller/delete_poi.php?id=<?php echo $poi['poi_id']; ?>" method="post">
                  <p><input type="submit" value="Supprimer POI" name="submit" /></p>
                </form>
              </div>
          </div>
        <?php
} ?>
    </div>

<script src="../assets/js/main.js"></script>
<script src="../assets/js/map.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
