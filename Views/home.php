<?php


/*
if(iseet($_POST['submit']))
{
$newUser= new UsersController();
$newUser->addUser();
}
*/
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';

//$data= new UsersController();
$users= UsersController::getAllUsers();


//echo  $users ;
//$dd=$data->getOnUser();
//var_dump($users);



?>

<div class="content-wrapper">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row justify-content-end">

  <!-- Content Wrapper. Contains page content -->

                <!--de la -->
              
              
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($users as $user):?>


                  <tr>
                        <td scope="col"><?php echo $user['P_PRENOM'].''.$user['P_PRENOM2'];  ?></td>
                        <td scope="col"><?php echo $user['P_NOM'] ; ?></td>
                        <td scope="col"><?php echo $user['P_SEXE']  ;?></td>
                        <td scope="col"><?php echo $user['P_GRADE']  ;?></td>
                        <td  class="d-flex flex-row" >
                        <form  class="mr-1" method="post" action="update">
                          <input type="hidden" name="id" value="<?php
                           echo $user['P_ID'];?>">
                           <button class="btn btn-sm btn-warning"><i class="fa fa-edit" ></i></button>
                        </form>
                        <form  class="mr-1" method="post" action="delete">
                          <input type="hidden" name="id" value="<?php
                           echo $user['P_ID'];?>
                           ">
                           <button class="btn btn-sm btn-danger"><i class="fa fa-trash" ></i></button>
                        </form>
                        
                   <a href="http://localhost/Interventions-Management/add" class="btn btn-sm btn-primary">
              <i class="fas fa-plus"></i>
                    </a>
                        </td>
                        
                    </tr>
                    <?php endforeach;?>

    
                  </tbody>
                  <!--jusque la qui doit changer-->
                </table>
