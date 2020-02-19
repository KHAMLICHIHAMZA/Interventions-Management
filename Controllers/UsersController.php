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
public function auth(){

if(isset($_POST['submit']))
{
//nomé le input username la ou je saisi le username
$data['P_CODE']=$_POST['username'];
$result =User::login($data);
if($result->P_CODE === $_POST['username'] && password_verify($_POST['password'],$result->P_MDP ));

$_SESSION['logged']= true;
$_SESSION['username']=$result->P_CODE;

header('Location: https://localhost/Interventions-Management/home');
}else
{

echo 'error Pseudo ou mot de pass est incorect';
header('Location: https://localhost/Interventions-Management');

}

}

}
?>