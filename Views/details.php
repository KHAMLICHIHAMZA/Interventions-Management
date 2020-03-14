<?php
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';

if(isset($_POST['P_ID'])){

$users=UsersController::getOneUser($_POST['P_ID']);


      
}


?>


            <div class="col-12 col-sm-12 col-md-12 align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Profile détaillé  
                </div>
                <br>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b></b></h2>
                      <br>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> ID :<?php echo $users['P_ID'];?></li><br>

                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> CODE :<?php echo $users['P_CODE'];?></li><br>

                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> PRENOM : <?php  echo  $users['P_PRENOM'].''.$users['P_PRENOM2'] ; ?></li> <br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> EMAIL : <?php  echo  $users['P_EMAIL'] ; ?></li><br>

                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> SEXE : <?php  echo  $users['P_SEXE'] ; ?></li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> GRADE : <?php  echo  $users['P_GRADE'] ; ?></li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> PROFESSION : <?php  echo  $users['P_PROFESSION'] ; ?></li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> STATUT : <?php  echo  $users['P_STATUT'] ; ?></li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> DATE ENGAGEMENT : <?php  echo  $users['P_DATE_ENGAGEMENT'] ; ?></li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-check"></i></span> HEURES A RECUPERER : <?php  echo  $users['TS_HEURES_A_RECUPERER'] ; ?></li><br>


                      </ul>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                  
                    <a href="http://localhost/Interventions-Management/liste" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> retour
                    </a>
                  </div>
                </div>
              </div>
            </div>

            