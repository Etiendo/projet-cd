<html>

<head>
    <title>Formulaire d'identification</title>
    <meta charset=utf-8>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel=stylesheet href="../assets/css/style.css" type="text/css">
</head>

<header>
    <div class="container">
        <div class="row">
            <div class="col-1">
            <a href="controller/inscription.php">Inscription</a>
            </div>
            <div class="col-6"></div>
            <div class="col-5">
                <h2 class="accueil">Je me connecte à ma carte</h2>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-2">
                    <label>Nom identifiant    <input type="text" id="utilisateur" name="name"></label>
                </div>
                <div class="col-2">
                    <label>Mot de passe     <input type="password" id="motdepasse" name="password"></label>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="submit" value="Connexion" name="submit">
                </div>
            </div>
        </form>
    </div>
    <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p>Les échoppes à proximité</p>
                </div>
                <div class="col-3">
                    <p>Latitude</p>
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

    <script src="../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
