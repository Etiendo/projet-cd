<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Mon échoppe.io</title>
</head>

<body>

<header>
    <div id="header" class="navigation">
        <div class="container">
            <div class="row">
                <div id="logo">
                    <h1><a href="#">Mon échoppe.io !</a></h1>
                </div>
                <div class="col-6">
                </div>
                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <form action="index.php" method="post">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link" href="controller/inscription.php">Inscription</a>
                                    <a class="nav-item nav-link">
                                        <label>Identifiant<input type="text" id="utilisateur" name="name"></label>
                                    </a>
                                    <a class="nav-item nav-link">
                                        <label>Mot de passe<input type="password" id="motdepasse" name="password"></label>
                                    </a>
                                    <a class="nav-item nav-link">
                                        <input type="submit" value="Connexion" name="submit">
                                    </a>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


    <div id="banner"></div>
    <div id="page" class="container">
        <div class="mainbox">
            <h2>Les échoppes à proximité</h2>
            <div class="box">
                <div id="map" class="map"></div>
                <span id="zoom">Trouvez vos échoppes !</span>
            </div>
            <div class="row">
            <div class="col-3">
                <p>Nom de l'échoppe</p>
            </div>
            <div class="col-3">
                <p>Lattitude</p>
            </div>
            <div class="col-3">
                <p>Longitude</p>
            </div>
        </div>
    <?php foreach ($poisGeneric as $poi) {
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
        </div>
    <?php
} ?>
        </div>
    </div>

<script src="assets/js/map_generic.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>