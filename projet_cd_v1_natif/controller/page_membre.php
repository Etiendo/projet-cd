<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start();

// On récupère nos variables de session
if (isset($_SESSION['name']) && isset($_SESSION['password'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Bienvenue '.$_SESSION['name'].' !';
    echo '<br />';

    // On affiche un lien pour fermer notre session. Pour des raisons inconnues, le lien pointe systématiquement vers le répertoire /index/logout.php...
    echo "<a href='../controller/logout.php'>Déconnexion</a>";
} else {
    echo 'Les variables ne sont pas déclarées.';
}
