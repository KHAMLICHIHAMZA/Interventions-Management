<?php
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


    static public function getAllType()
    {
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
    static public function getRolebyEngins($TV){

        $Role = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getAllRoles");
        //  echo $response;
        $Roles = json_decode($Role,true);
       
        $var=array();
        foreach($Roles as $r){

                echo $r['TV_LIBELLE'];
            
        }

        
        //return $response;
    }

}

//$tests = InterventionsController::getAllType();
//echo json_encode($tests);
//foreach($tests as $test){
//echo $test;
//}
?>
