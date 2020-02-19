<?php
require_once 'Model/Utilisateur.php';
class UtilisateursController{
    static public function ListUtilisateur(){
        $response = Utilisateur::getAll();
      //  echo $response;
         return json_encode($response);
        //return $response;
    }
    static public function SearchUtilisateur($P_CODE){
            // retourne L utilisateurs en fonction du p_code
            $response = Utilisateur::getByP_CODE($P_CODE);
            //var_dump($response);
            return  json_encode($response);
    }
}
