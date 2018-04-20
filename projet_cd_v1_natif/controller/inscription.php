<?php

require '../model/user.php';

if (isset($_POST["submit"])) {
    $name = $_POST['pseudo']; //name de la balise <form> POST
    $pwd = $_POST['password']; //name de la balise <form> POST

    User::inscription($name, $pwd);
}

require '../view/inscription.php';
