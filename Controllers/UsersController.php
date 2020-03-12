<?php
//session_start();
require_once './Models/User.php ';
require_once './Controllers/HomeController.php ';


class UsersController{

    public static function update()
{
    $data=array('post'=>$_POST);
    
    $str=http_build_query($data);
    
    $ch= curl_init();
    
    curl_setopt($ch, CURLOPT_URL,"http://localhost/api/utilisateurs.php?c=utilisateurs&m=update");
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    
    $output = curl_exec($ch);
    
    curl_close($ch);

    $result= json_decode($output,true);


    return $result;
  


   


}
public static function mdpoublie()
{


}
    public static function logout ()
{
var_dump($_SESSION);
        session_destroy();
        

        //header("Location:http://localhost/Interventions-Management/login2");

}

public static function test()
{

    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $data=array('username'=>$username,'password'=>$password,'session'=>$_SESSION);
    
    
    $str=http_build_query($data);
    
    $ch= curl_init();
    
    curl_setopt($ch, CURLOPT_URL,"http://localhost/api/utilisateurs.php?c=utilisateurs&m=auth");
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    
    $output = curl_exec($ch);
    
    curl_close($ch);

    $result= json_decode($output,true);


    $home = new HomeController();


    if ( isset($username) && isset($result) && $result['P_CODE'] === $username && md5($password) == $result['P_MDP']) 
        
        {
            $_SESSION['logged'] = true;
            $_SESSION['username']=$result['P_CODE'];
            $_SESSION['P_ID']=$result['P_ID'];  
            header("Location:http://localhost/Interventions-Management/home");
        }
        else
        {
            header("Location:http://localhost/Interventions-Management/login2");
        }


}
public static function getAllUsers()
{

    $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
    return json_decode($users,true);

}

public static function getOneUser($id)
{
    
 $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=getOne&P_ID=".$id);

return json_decode($users,true);


}
public static function login()

{

$users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=auth");

$e=json_decode($users,true);
return $e;

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

}



?>


