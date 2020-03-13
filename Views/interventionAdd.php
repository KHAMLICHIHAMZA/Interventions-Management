<?php
require_once 'C:/wamp64/www/Interventions-Management/Controllers/InterventionsController.php';
$Intervention = new InterventionsController;
if(isset($_POST['submit']) || isset($_POST['submit1'])){
  $Intervention->addInterventionEngins();
  //echo '<script language="JavaScript" type="text/javascript">window.location.replace("http://localhost/Interventions-Management/EnginsAdd");</script>';
  //var_dump($_POST);
}
$Type_Inters = InterventionsController::getAllType();
if(isset($_POST['submit'])){
  ?>
  <?php //var_dump($_SESSION);?>
    <div class="container container-fluid" style="width:1000px; float:left; margin-left:10px;">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><strong>Engins et personnel :</strong></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="card-body">
                <form role="form" id="test" method="POST" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Nom de l'engin N1</label>
                                <select class="form-control" name="Nom_Engin" id="Nom_Engin">
                                    <?php
                                    $Engins = InterventionsController::getAllEngins();
                                    foreach ($Engins as $Engin) :
                                    ?>
                                        <option value="<?php echo $Engin['TV_CODE']; ?>"> <?php echo $Engin['TV_LIBELLE']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- select -->
                            <div class="form-group"></br>
                                <button type="Submit" class="btn btn-block btn-success" id="submitBtn" value="submit">Valider</button>
                            </div>
                        </div>
                    </div>
                    <div id="content"></div>
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
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group"></br>
                        <input type="submit" class="btn btn-block btn-success" name="submit1" value="Valider Formulaire">
                      </div>          
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $('#submitBtn').click(function(event) {
            event.preventDefault();
            var name = $('#Nom_Engin').val();
            $.ajax({
                url: 'Views/php/page.php',
                data: 'name=' + name,
                success: function(data) {
                    $('#content').html(data);
                },
                error: function() {
                    alert('failure');
                }
            });
        });
    </script>
  <?php
  }
  else{
  ?>

</br>
<div class="container container-fluid" style="width:1000px; float:left; margin-left:10px;">
  <!-- general form elements disabled -->

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><strong>Intervention :</strong></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="" id="test" method="post">
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Commune d'intervention </label>
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
                foreach ($Type_Inters as $Type_Inter) :
                ?>
                  <option value="<?php echo $Type_Inter['TI_CODE']; ?>"> <?php echo $Type_Inter['TI_CODE']; ?> </option>
                <?php
                endforeach;
                ?>
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
        <div class="col-sm-12">
          <!-- select -->
          <div class="form-group"></br>
            <input type="submit" class="btn btn-block btn-success" name="submit" value="Valider Formulaire">
          </div>          
        </div>
      </form>
    </div>
  </div>
  <?php } ?>
  <!--<div id="content"></div>-->