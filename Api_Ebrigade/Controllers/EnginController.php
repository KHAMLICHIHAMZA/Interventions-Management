<?php

require_once '../Model/Engins.php';

class EnginController{
    //retourne tous les utilisateurs
    static public function ListPompier() {
        $vehicule = Engins::GetAllEngins();
        return $vehicule;
    }
}


$test = EnginController::ListPompier();

foreach($test as $tst){
    echo $tst;
}

?>