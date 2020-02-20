
</br>
<div class="col-md-8 container container-fluid" >
  <!-- general form elements disabled -->
  <div class="card card-warning">
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
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Adresse d'intervention</label>
              <input type="text" class="form-control" placeholder="Enter ...">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- select -->
            <div class="form-group">
              <label>Type d'intervention</label>
              <select class="form-control">
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
    <div class="card-warning">
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
                <select class="form-control">
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

        </form>
      </div>
    </div>
    <div class="card-warning">
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
                <input type="text" class="form-control" placeholder="Nom & Prenom">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>