<?php
require_once CLASSES.DS.'view.php';
require_once './Models/InterventionModel.php ';

class ArchiveController
{

    public static function getAll()
    {
        $interventionM = new interventionsModel();
        $listeIntervention =  $interventionM->getall();
        //  var_dump($listeIntervention);

        $v=new View();
        $v->setVar('interventions',$listeIntervention);
        $v->render('archiveintervention');
    }
    public static function detailintervention($id)
    {
        $interventionM = new interventionsModel();
        $Intervention =  $interventionM->getbyinterventionid($id);
        //var_dump($listeIntervention);
     //   $listeengin =  $interventionM->getenginbyinterventionID($id);
        //var_dump($listeengin);
      //  $listepersonnel =  $interventionM->getpersonnelbyenginID(1,$id);
        //var_dump($listepersonnel);
        //$responsable = $interventionM->getResponsablePersonnelID(4);
       // var_dump($responsable);
        $v=new View();
        //$v->setVar('intervention',$Intervention[0]);
       // $v->setVar('engins',$listeengin);
       // $v->setVar('idinterventions',$id);
        $v->setVar('intervention',$Intervention);
        //$v->setVar('interventions',$listeIntervention);
        $v->render('archivevueintervention');
    }

}



?>
