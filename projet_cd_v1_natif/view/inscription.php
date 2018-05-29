<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="../assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Inscription</title>
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

<div class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <form action="../controller/inscription.php" method="post">
            <label>Votre pseudo <input type="text" id="pseudo" name="pseudo" required/></label>
            <label>Votre mot de passe <input type="password" id="pwd" name="password" required/></label>
            <p><input type="submit" value="Valider votre inscription" name="submit"></p>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <a href="../index.php">Retour à l'index</a>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
