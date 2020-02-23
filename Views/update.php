<?php
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';
$users= UsersController::getOneUser();

?>

</br>
<div class="container container-fluid" style="">
  <!-- general form elements disabled -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><strong>Modifier un utilisateur</strong></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Prenom</label>
              <input type="text" class="form-control" placeholder="Prenom" >
            </div>
          </div>
          <div class="col-sm-11">
            <div class="form-group">
              <label> Nom </label>
              <input type="text" class="form-control" placeholder="Nom">
            </div>
          </div>
          <div class="col-sm-11">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label>Sexe </label>
              <input type="text" class="form-control" placeholder="Sexe">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label>Grade</label>
              <input type="text" class="form-control" placeholder="Grade">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label> Profession </label>
              <input type="text" class="form-control" placeholder="Profession">
            </div>
          </div> <div class="col-sm-11">
            <div class="form-group">
              <label>Statut </label>
              <input type="text" class="form-control" placeholder="Statut">
            </div>
     

            <div class="form-group">

          <input type="submit" class ="btn btn-primary" name="submit" value="valider"> 
            </div>
    
      </form>

    </div>
    <!-- /.card-body -->


  </div>
</div>