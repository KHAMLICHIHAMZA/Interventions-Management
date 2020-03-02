<?php
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';

class InterventionsController
{




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
        //var_dump($listeIntervention);
        $v=new View();
        //$v->setVar('interventions',$listeIntervention);
        $v->render('validationrapport');
    }

    static public function getAllType()
    {
        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=interventions&m=getAll");
        //  echo $response;
        $type = json_decode($Type_Inter,true);
        return $type;
        //return $response;
    }

    static public function getAllEngins(){
        $Type_Inter = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getAll");
        $type = json_decode($Type_Inter,true);
        
        //return $response;
        //die(print_r($_POST['Valider']));
        // Check if any option is selected 
       return $type;
    }
    //static $TV="Ambulance de secours et de soins d'urgence";
    static public function getRolebyEngins($TV){
        $Eng_Code=null;
        $Engin = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getEngin&P_CODE=".$TV);
        $Eng=json_decode($Engin,true);
        //var_dump($Eng);
        foreach ($Eng as $tst){
            echo("<script>console.log('PHP: " . $tst . "');</script>");
        }
        var_dump($Eng_Code);
        $Role = file_get_contents("http://localhost/api/utilisateurs.php?c=engin&m=getAllRoles");
        $Roles =  json_decode($Role,true);
        //$var=array();
        for($i =1;$i<sizeof($Roles);$i++){
            for($j =1;$j<sizeof($Roles[$i]);$j++){
                if( $Roles[$i][$j]['TV_CODE'] == $TV){
                    echo $Roles[$i][$j]['TV_CODE'].'  '. $Roles[$i][$j]['ROLE_ID'].'  '. $Roles[$i][$j]['ROLE_NAME'].'</br>';
                }
            }
        }        
        //return $response;
    }
}
?>
