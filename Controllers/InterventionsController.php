<?php
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';

class InterventionsController
{
    static public function getAllType(){

       // $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=TypeIntervention&m=getAll");
        //  echo $response;
        //$type =json_decode($Type_Inter,true);
        //return $type;
        //return $response;
    }



    public static function getAll()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->getall();
      //  var_dump($listeIntervention);

        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->render('listeintervention');
    }
    public static function detailintervention($id)
    {
        $interventionM = new interventionsModel();
        $Intervention =  $interventionM->getbyinterventionid($id);
        //var_dump($listeIntervention);
        $listeengin =  $interventionM->getenginbyinterventionID($id);
        //var_dump($listeengin);
        $listepersonnel =  $interventionM->getpersonnelbyenginID(1,$id);
        //var_dump($listepersonnel);
        //$responsable = $interventionM->getResponsablePersonnelID(4);
       // var_dump($responsable);
        $v=new View();
        $v->setVar('intervention',$Intervention[0]);
        $v->setVar('engins',$listeengin);
        $v->setVar('idinterventions',$id);
        $v->setVar('interventionM',$interventionM);
        //$v->setVar('interventions',$listeIntervention);
        $v->render('interventiondetail');
    }
    public static function redactionRapport()
    {
        $interventionM = new interventionsModel();
        //$listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);
        $v=new View();
        //$v->setVar('interventions',$listeIntervention);
        $v->render('redactionrapport');
    }

    public static function validationRapport()
    {
        $interventionM = new interventionsModel();
        //$listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);
        $v=new View();
        //$v->setVar('interventions',$listeIntervention);
        $v->render('validationrapport');
    }


}

//$tests = InterventionsController::getAllType();
//echo $tests;
//foreach($tests as $test){
//echo $test;
//}
?>
