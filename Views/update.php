
</br>
<div class="container container-fluid" style="width:1000px; float:left; margin-left:10px;">
  <!-- general form elements disabled -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><strong>Modifier un utilisateur</strong></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form">
        <div class="row">
          <div class="col-sm-12">
            <!-- text input -->
            <div class="form-group">
              <label>Commune d'intervention</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>Adresse d'intervention</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
          </div>
        </div>
    

        <!-- input states -->
        <div class="row">
          <div class="col-sm-10">
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
              <label>Date & Heure de fin :</label>
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
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Important</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">OPM</label>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
    <!-- /.card-body -->


  </div>
</div>