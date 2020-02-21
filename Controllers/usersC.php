<?php
require_once './Models/usersM.php ';
require_once 'classes/view.php';

class UsersController {

public function getAllUsers()
{
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    $v=new View();
    $v->setVar('users', json_decode($users,true));
    $v->render('listeuser');
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
    header('Location: https://localhost/Interventions-Management/liste');
    }
}
}



/*
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
*/


?>


