<?php
    require_once 'Api_Ebrigade/Model/Utilisateur.php';
    class UtilisateurController{
        static public function ListUtilisateur(){
            $response = Utilisateur::getAll();
            return json_encode($response);
           // return $response;
        }
        static public function SearchUtilisateur($P_CODE){
            if(isset($P_CODE)){
                // retourne L utilisateurs en fonction du p_code
                $response = Utilisateur::getByP_CODE($P_CODE);
                return json_encode($response);
            }
        }
    }
    



/*
if(isset($_GET['P_CODE'])){
    // retourne L utilisateurs en fonction du p_code
    $response = Utilisateur::getByP_CODE($_GET['P_CODE']);
}else{
    //retourne tous les utilisateurs
    $response = Utilisateur::getAll();
}
echo json_encode( $response);


//$success = true;
//
//reponse_json($resp);
*/


///function d'enregistrement

?>