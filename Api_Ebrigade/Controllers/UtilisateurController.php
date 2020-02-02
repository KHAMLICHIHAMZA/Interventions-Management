<?php
    require_once '../Model/Utilisateur.php';
    class UtilisateurController{
        public function ListUtilisateur(){
            $response = Utilisateur::getAll();
            return json_encode($response);
        }
        public function SearchUtilisateur($P_CODE){
            if(isset($P_CODE)){
                // retourne L utilisateurs en fonction du p_code
                $response = Utilisateur::getByP_CODE($P_CODE);
                return json_encode($response);
            }
        }
    }
    
    $id="1234";
    $test= UtilisateurController::SearchUtilisateur($id);
    echo $test;


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