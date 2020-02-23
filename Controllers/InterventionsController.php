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

}