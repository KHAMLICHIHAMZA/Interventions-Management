<?php

class InterventionsController{
    static public function getAllType(){

        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=TypeIntervention&m=getAll");
        //  echo $response;
        $type =json_decode($Type_Inter,true);
        return $type;
        //return $response;
    }

}
$tests = InterventionsController::getAllType();
//echo $tests;
foreach($tests as $test){
echo $test;
}
?>
