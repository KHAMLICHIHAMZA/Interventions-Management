<?php
require_once './Models/interventionsM.php ';
require_once 'classes/view.php';

class InterventionsController {

    public function getAllUsers()
    {
        $users = file_get_contents("http://localhost/api/utilisateurs.php?c=utilisateurs&m=ListUtilisateur");
        $v=new View();
        $v->setVar('users', json_decode($users,true));
        $v->render('listeuser');
    }


}
?>


