<?php
require_once './Models/User.php ';
require_once 'Api_Ebrigade/Controllers/UtilisateurController.php';

class UsersController{

static public function getAllUsers()
{
    /*
    ob_start();
    $users = UtilisateurController::ListUtilisateur();
    include ("Views/home.php");
    $html = ob_end_flush();
    return $html;
    */

$users = UtilisateurController::ListUtilisateur();
return $users;

}


public function addUser(){
 
if(isset($_POST['submit'])){

$data= array(
    'Nom' => $_POST['Nom'],
    'Prenom' => $_POST['Prenom'],
    'Sexe' => $_POST['Sexe'],
    'Grade' => $_POST['Grade'],


);
$result=User::add($data);
if($result === 'ok'){

header('location:'.'http://localhost/Interventions-Management/home');
}else
{
    echo $result;
}

}

}

public function getOnUser()
{

if(isset($_POST['P_ID']))
{
$data =array(
    'P_ID'=> $_POST['P_ID']);
$user= User::getUser($data);
return $user;

}

}

}
?>