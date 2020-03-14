<?php
require_once 'C:/wamp/www/Interventions-Management/classes/view.php';
require_once 'C:/wamp/www/Interventions-Management/Models/RapportModel.php ';
require_once 'C:/wamp/www/Interventions-Management/Controllers/InterventionsController.php';

class RapportsController
{


    public static function listerapportcommentaire($id)
    {
        $RapportM = new rapportsModel();
        return $RapportM->listerapportcommentaire($id);
    }

    public static function listeAllrapportresponsable()
    {
        $RapportM = new rapportsModel();
        //  var_dump($listeIntervention);
        $v=new View();

      //  $v->setVar('rapport',$RapportM->listeAllRapportresponsable());
        $v->setVar('rapport',$RapportM->listeAllRapportresponsablebylogin(3));
        $v->render('listeAllRapportresponsable');
    }

    public static function Modificationrapport($id,$contenu)
    {
        $RapportM = new rapportsModel();
        //  var_dump($listeIntervention);
        $RapportM->modificationrapport($id,$contenu);
        $v=new View();
        $v->setVar('message','rapport modifier avec succè');
        self::listeAllrapportresponsable();
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
        $listepersonnel =  $interventionM->getpersonnelbyenginID(1,$id);
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
        $v->render($pageretourner);
    }
    public static function correctionrapport($id)
    {
        self::detail($id,'correctionrapport');
    }





}



?>
