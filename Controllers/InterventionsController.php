<?php

class InterventionsController{
    static public function getAllType(){

        $Type_Inter = file_get_contents("http://localhost/API-Ebrigade-Interventions/utilisateurs.php?c=typeintervention&m=getAll");
        //  echo $response;
        return $Type_Inter;
        //return $response;
    }

}
$test = InterventionsController::getAllType();
echo (($test));
?>