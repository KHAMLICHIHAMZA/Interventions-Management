<?php
//require_once CLASSES.DS.'view.php';


require_once 'C:/wamp64/www/Interventions-Management/Models/InterventionModel.php ';
//require_once './classes/view.php ';
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';
require_once 'Controllers/RapportsController.php';

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


    public static function ispersonnel($P_CODE)
    {
        $interventionM = new interventionsModel();
        $etat = $interventionM->ispersonnel($P_CODE);
        if (isset($etat[0]))
            return true;
        else
            return false;
    }

    public static function isresponsable($P_CODE)
    {
        $interventionM = new interventionsModel();
        $etat = $interventionM->isresponsable($P_CODE);
        if (isset($etat[0]))
            return true;
        else
            return false;
    }



    public static function getAll()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->getall();
        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->setVar('listeinterventions',$interventionM);

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
        //$listeIntervention =  $interventionM->listeIRapportnonrediger();
        $listeIntervention =  $interventionM->listeIRapportnonredigerlogin(1);

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
        $responsable = $interventionM->getResponsableIntervention($id);
        // var_dump($responsable);
        $v=new View();
        $v->setVar('intervention',$Intervention);
        $v->setVar('engins',$listeengin);
        $v->setVar('idinterventions',$id);
        $v->setVar('rapport',$rapports);
        $rapport = new rapportsModel();
        $comment = null;
        if(isset($rapports->id_rapport))
            $comment = $rapport->listerapportcommentaire($rapports->id_rapport);
        $v->setVar('commentaire',$comment);
        $v->setVar('interventionM',$interventionM);
        $v->setVar('responsable',$responsable);

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
    //Recuperation des Roles associers a l'engin
    static public function getRolebyEngins($TV){
        $Role = file_get_contents("http://localhost/api/utilisateurs.php?c=Engin&m=getRolesEngin&P_CODE=".$TV);       
        return json_decode($Role,true);
    }

    public function addInterventionEngins(){
        $TableIntervention=null;
        $TableEngin=array();
        if(isset($_POST['submit']) || isset($_POST['submit1'])){
            if(empty($TableIntervention)){
                $TableIntervention = array(
                    'Commune' => $_POST['Commune'],
                    'Adresse' => $_POST['Adresse'],
                    'Type_interv' => $_POST['Type_interv'],
                    'Date_Heure_Debut' => $_POST['Date_Heure_Debut'],
                    'Date_Heure_Fin' => $_POST['Date_Heure_Fin'],
                    'Important' => $_POST['Important'],
                    'Opm' => $_POST['Opm'],
                );
                die(var_dump($TableIntervention));               
            }else{
                $TableEngin = array(
                    'Nom_Engin' => $_POST['Nom_Engin'],
                    'Date_Heur_Depart' => $_POST['Date_Heur_Depart'],
                    'Date_Heure_Arriver' => $_POST['Date_Heure_Arriver'],
                    'Date_Heure_Retour' => $_POST['Date_Heure_Retour'],
                );
            }
        //$TableEngin=json_encode($TableIntervention);
        }
    }
}

?>
