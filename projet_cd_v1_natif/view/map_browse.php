<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="../assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Ma carte des échoppes</title>

</head>

<body>

    <!-- <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">Mon échoppe.io !</a></h1>
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
            </ul>
            <div class="raw">
                <div class="col-6"></div>
                <form action="" class="form-inline my-2 my-lg-0" accesskey="6">
                <div class="col-3">
                    <input class="form-control mr-sm-2" type="search" placeholder="Mon échoppe" aria-label="Search">
                </div>
                <div class="col-3">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher mon échoppe</button>
                </div>
                </form>
            </div>
        </div>
    </div> -->

<div id="header" class="container">
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div id="logo">
                    <h1><a href="#">Mon échoppe.io !</a></h1>
                </div>
                <div class="col-6">
                </div>
                <div class="col-4">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="#">Accueil</a>
                                <a class="nav-item nav-link" href="#">Articles</a>
                            <a class="nav-item nav-link" href="#">A propos</a>
                                <a class="nav-item nav-link" href="#">Nous contacter</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-4">
                    <form action="" class="form-inline my-2 my-lg-0" accesskey="6">
                        <input class="form-control mr-sm-2" type="search" placeholder="Mon échoppe" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher mon échoppe</button>
                    </form>
                </div>
            </div>
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

        <br><br><br><br><br><br><br><br><br>

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

    <div id="carrousel" class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/css/images/jurasserie-fine.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Article 1</h5>
                        <p>Blabla 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/css/images/charlicot.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Article 2</h5>
                        <p>Blabla 2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/css/images/auvergnat.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Article 3</h5>
                        <p>Blabla 3</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <div id="featured" class="container">
    <div class="align-left">
      <span class="fa fa-pagelines"></span>
    </div>
    <div class="align-right">
      <p>This is <strong>PlainLeaf</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free
        template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :)
      </p>
      <a href="#" class="button">Etiam posuere</a>
    </div>
  </div>

<script src='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
<script src="../assets/js/map.js"></script>
<script src="../assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
