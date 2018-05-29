<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <title>Ma liste de POI</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

<div id="header" class="container">
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-6" id="logo">
                    <h1><a href="/projet-cd/projet_cd_v1_natif/">Mon échoppe.io !</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- on récupère l'id de la page view/map_browse.php. ...php?id=donne un identifiant de page égal à une variable-->
    <form action="../controller/edit_poi.php?id=<?php echo $id; ?>" method="post">
        <p>Nouveau nom <input type="text" name="poi_name" required/></p>
        <p>Nouvelle latitude <input type="text" name="poi_lat" required/></p>
        <p>Nouvelle longitude <input type="text" name="poi_lng" required/></p>
        <p><input type="submit" value="Modifier l'échoppe" name="submit"></p>
    </form>
    
    <a href="../controller/map_browse.php">Retour à l'index</a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
