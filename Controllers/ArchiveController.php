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
    public static function filtrage($element)
    {
        switch ($element) {
            case 'date': {
                    $nameBD = "Date_Heure_Debut";
                    $name="date heure debut";
                    break;
                }
            case 'numerointervention': {
                    $nameBD = "Numero_Intervention";
                    $name = "numero Intervention";
                    break;
                }
            case 'adresse': {
                    $nameBD = "Adresse";
                    $name = "Adresse";
                    break;
                }
            case 'adresse': {
                    $nameBD = "Adresse";
                    $name = "Adresse";
                    break;
                }
        }
        require_once './Models/Filtre.php ';
        $filtreF = new Filtre();
        $listeFiltre =  $filtreF->filtrepar($nameBD);

        $v=new View();
        $v->setVar('filtres',$listeFiltre);
        $v->setVar('nameBD',$nameBD);
        $v->setVar('name',$name);

        $v->render('archivefiltrer');
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
