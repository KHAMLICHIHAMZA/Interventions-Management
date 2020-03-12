<?php
require_once CLASSES.DS.'view.php';
require_once './Models/RapportModel.php ';
require_once 'Controllers/InterventionsController.php';

class RapportsController
{
    public static function listeAllrapportresponsable()
    {
        $RapportM = new rapportsModel();
        //  var_dump($listeIntervention);
        $v=new View();
        $v->setVar('rapport',$RapportM->listeAllRapportresponsable());
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
    public static function correctionrapport($id)
    {
        self::detail($id,'correctionrapport');
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
        $v->setVar('intervention',$Intervention[0]);
        $v->setVar('engins',$listeengin);
        $v->setVar('idinterventions',$id);
        $v->setVar('rapport',$rapports);
        $v->setVar('interventionM',$interventionM);
        $v->render($pageretourner);

    }





}



?>
