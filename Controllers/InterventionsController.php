<?php

class InterventionsController{
    static public function getAllType(){

        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=typeintervention&m=getAll");
        //  echo $response;
        $type = json_decode($Type_Inter,true);
        return $type;
        //return $response;
    }
    static public function getAllEngins(){

        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getAll");
        //  echo $response;
        $type = json_decode($Type_Inter,true);
        return $type;
        //return $response;
    }
}

//$tests = InterventionsController::getAllType();
//echo json_encode($tests);
//foreach($tests as $test){
//echo $test;
//}
?>