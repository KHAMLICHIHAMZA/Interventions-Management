<?php
<<<<<<< HEAD
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';

class InterventionsController
{
    public static function getall()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->getall();
      //  var_dump($listeIntervention);
        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->render('listeintervention');
    }
    public static function detailintervention()
    {
        $interventionM = new interventionsModel();
        //$listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);
        $v=new View();
        //$v->setVar('interventions',$listeIntervention);
        $v->render('interventiondetail');
    }
    public static function listerapport()
    {
        $interventionM = new interventionsModel();
        //$listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);
        $v=new View();
        //$v->setVar('interventions',$listeIntervention);
        $v->render('interventiondetail');
    }
    public static function detailinterventions()
    {
        $interventionM = new interventionsModel();
        //$listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);
        $v=new View();
        //$v->setVar('interventions',$listeIntervention);
        $v->render('interventiondetail');
    }

}
=======

class InterventionsController{
    static public function getAllType(){

<<<<<<< HEAD
        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=typeintervention&m=getAll");
=======
        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=TypeIntervention&m=getAll");
>>>>>>> 162116ea8f62791111af0de1aa37b9e4669193fb
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
<<<<<<< HEAD

//$tests = InterventionsController::getAllType();
//echo json_encode($tests);
//foreach($tests as $test){
//echo $test;
//}
?>
=======
$tests = InterventionsController::getAllType();
//echo $tests;
foreach($tests as $test){
echo $test;
}
?>
>>>>>>> 93b9e6ebdcf166d670cbd2de18bb02550a589fcb
>>>>>>> 162116ea8f62791111af0de1aa37b9e4669193fb
