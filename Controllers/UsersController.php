

<?php
require_once './Models/User.php ';

class UsersController{

public static function getAllUsers()
{


    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);

    
    //$users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");

//    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");

   
  //  return $d=json_decode($users,true);

}

public static function getOneUser($id)
{
   
    
 $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=getOne&P_ID=".$id);




return json_decode($users,true);

}
public static function update(){

    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);

}
public static function delete(){
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
}
public static function getusergrade(){
    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
}
public static function right(){

    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);
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
header('Location: https://localhost/Interventions-Management/liste');

}

}

}



?>


