<?php
require_once 'Model/Engins.php';

    //retourne tous les utilisateurs
    $response = Engins::GetAllEngins();
    foreach ($response as $vehicule) // Chaque entrée sera récupérée et placée dans un array.
    {

             echo json_encode($vehicule['V_ID'].' '.$vehicule['TV_CODE'].' '.$vehicule['V_IMMATRICULATION'].' '.$vehicule['V_MODELE'].' '.$vehicule['V_KM']).'</br>';
        
    }

?>