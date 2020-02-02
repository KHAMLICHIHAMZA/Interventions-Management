<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'Model/Utilisateur.php';
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
?>


