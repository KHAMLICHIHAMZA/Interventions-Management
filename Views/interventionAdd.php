<?php
include_once('C:/wamp64/www/Interventions-Management/Controllers/InterventionsController.php');
//$Type_Inter = InterventionsController::getAllType();
//die(print_r($Type_Inter));
?>
</br>
<div class="container container-fluid" style="width:1000px; float:left; margin-left:10px;">
  <!-- general form elements disabled -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><strong>Intervention</strong></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form">
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Commune d'intervention</label>
              <input type="text" class="form-control" name="Commune" placeholder="Commune ...">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Adresse d'intervention</label>
              <input type="text" class="form-control" name="Adresse" placeholder="Lieu d'intervention">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
              <label>Type d'intervention</label>
              <select class="form-control" name="Type_interv">
                <?php 
                //$Type_Inter = InterventionsController::getAllType();
                //die(print_r($Type_Inter));
                foreach($Type_Inter as $Type_Intervention){
                ?>
                <option><?php echo $Type_Intervention['TI_CODE'] ?></option>
                
                <?php } ?>
              </select>
            </div>
          </div>
        </div>

        <!-- input states -->
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Date & Heure de declanchement :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                </div>
                <input type="datetime-local" class="form-control float-right" name="Date_Heure_Debut" id="reservation">
              </div>
              <!-- /.input group -->
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Date & Heure de fin :</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                </div>
                <input type="datetime-local" class="form-control float-right" name="Date_Heure_Fin" id="reservation">
              </div>
              <!-- /.input group -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" name="Important" type="checkbox">
                <label class="form-check-label">Important</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" name="Opm" type="checkbox">
                <label class="form-check-label">OPM</label>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
    <!-- /.card-body -->
    <div class="card-primary">
      <div class="card-header">
        <h3 class="card-title"><strong> Engins et personnel </strong></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form">
          <div class="row">
            <div class="col-sm-6">
              <!-- select -->
              <div class="form-group">
                <label>Nom de l'engin N1</label>
                <select class="form-control" name="Nom_Engin">
                  <option>Type</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            </div>
          </div>

          <!-- input states -->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Date & Heure depart :</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="datetime-local" class="form-control float-right" name="Date_Heur_Depart" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Date & Heure d'arriver sur le lieux :</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="datetime-local" class="form-control float-right" name="Date_Heure_Arriver" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
            </div>
          </div>

          <!-- input states -->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Date & Heure de declanchement :</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="datetime-local" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Date & Heure de retour :</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="datetime-local" class="form-control float-right" name="Date_Heure_Retour" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card-primary">
      <div class="card-header">
        <h3 class="card-title"><strong> Responsable </strong></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form">
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Responsable</label>
                <input type="text" class="form-control" name="Nom" placeholder="Nom & Prenom">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>