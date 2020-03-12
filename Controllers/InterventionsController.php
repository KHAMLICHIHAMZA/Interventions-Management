<?php
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';

class InterventionsController
{
    public static function validerapport($etat,$id,$commentaire)
    {
        $interventionM = new interventionsModel();
        if ($commentaire!=null){
            $interventionM->ajoutcommentaire($id,$commentaire);
        }
        $listeIntervention =  $interventionM->validationrapport($etat,$id);
        //  var_dump($listeIntervention);
        $v=new View();
        $v->setVar('message',"validation effectuer avec succè");
        self::listeallrapportchef();
    }

    public static function valide($etat,$id,$commentaire){
        self::validerapport($etat,$id,$commentaire);
    }
    public static function rejete($etat,$id,$commentaire){
        self::validerapport($etat,$id,$commentaire);
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


    public static function ajoutRapport($rapport,$numero_intervention)
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->ajoutrapport($rapport,$numero_intervention);
        //var_dump($listeIntervention);
        self::listeIRapportnonrediger();
    }

    public static function listeallrapportchef()
    {
        $interventionM = new interventionsModel();
        $listeR = $interventionM->listeAllRapport();
        //var_dump($listeIntervention);
        $v=new View();
        $v->setVar('rapport',$listeR);
        $v->render('listeAllRapportchef');
    }


    public static function listeIRapportnonrediger()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->listeIRapportnonrediger();
         // var_dump($listeIntervention);

        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->render('liste_rapport_en_attente_de_redaction');
    }

    public static function detail($id,$pageretourner)
    {
        $interventionM = new interventionsModel();
        $Intervention =  $interventionM->getbyinterventionid($id);
        //var_dump($listeIntervention);
        $rapports =  $interventionM->getinterventionrapport($id);
        if(isset($rapports[0]))
            $rapports = $rapports[0];

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
        $v->setVar('rapport',$rapports);
        $v->setVar('interventionM',$interventionM);
        //$v->setVar('interventions',$listeIntervention);
        $v->render($pageretourner);
    }

    public static function detailintervention($id)
    {
        self::detail($id,'interventiondetail');
    }
    public static function redactionRapport($id)
    {
        self::detail($id,'redactionrapport');
    }

    public static function validationRapport($id)
    {
        self::detail($id,'validationrapport');
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
        $Roles =  json_decode($Role,true);

        $var=array();

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
