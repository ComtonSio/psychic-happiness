<?php   // partie Contrôleur du blog

//The Game...
require 'modele.php';
/*Je mange des peanut*/
try {
    $billets = getBillets();        // Utilisation des services du modèle
    require 'listeBillets.php';     // Génération de la vue associée
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();  // Création du message d'erreur
    require 'erreur.php';           // Génération de la vue d'erreur
}

