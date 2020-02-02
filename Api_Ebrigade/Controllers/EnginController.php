<?php

require_once '../Model/Engins.php';

class EnginController{
    //retourne tous les utilisateurs
    static public function ListPompier() {
        $vehicule = Engins::GetAllEngins();
        return json_encode($vehicule);
    }
}


$test = EnginController::ListPompier();
echo $test;
?>