<?php
require_once './Models/User.php ';

class UsersController{

public function getAllUsers()
{

$users = User::getAll();

return $users;

}


}
?>