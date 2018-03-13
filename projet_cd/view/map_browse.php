<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel=stylesheet href="../assets/css/style.css" type="text/css">
    <title>Ma carte perso</title>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
                <h1 class="espace_perso">Ma carte perso</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Carte</h2>
            </div>
            <div class="col-6">
                <h2>Ajouter des POI en BDD</h2>
                <form action="../controller/add_poi.php" method="post">
                    <p>Nom échoppe <input type="text" name="echoppe" /></p>
                    <p>Latitude <input type="value" name="latitude"  /></p>
                    <p>Longitude <input type="value" name="longitude" /></p>
                    <p><input type="submit" value="OK" name="submit" /></p>
                </form>
            </div>
        </div>

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
