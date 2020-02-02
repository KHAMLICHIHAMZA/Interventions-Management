<?php
require_once 'DB.php';

class Engins
{

    public $V_ID;
    public $TV_CODE;
    public $V_IMMATRICULATION;   
    public $V_MODELE;
    public $V_KM;

    


    public function __construct(){}
    static public function GetAllEngins(){
        $Engin=new Engins();
        $Stmt=DB::connect()->prepare('SELECT V_ID, TV_CODE,V_IMMATRICULATION, V_MODELE,V_KM FROM vehicule');
        $Stmt->execute();
        return $Stmt->fetchAll();
        $Stmt->closeCursor();
        $Stmt=null;
    }
}


?>