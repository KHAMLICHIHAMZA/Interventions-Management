<?php  include_once './Views/includes/header.php' ?>

<?php  include_once './Views/includes/navebar.php' ?>


  <!-- Main Sidebar Container -->
  <?php  include_once './Views/includes/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">

              <div class="card-body">

               <div class="d-flex flex-row justify-content-end">
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
                         

    
                    </tbody>
                  </table>

 
  </div>
</div>
</div>
            <!-- premier card -->
            <?php
             // include_once './Views/includes/firstcard.php' 
            ?>


            <!-- /.card -->
                        <!-- deuxieme card -->

            <?php 
             //include_once './Views/includes/secondcard.php' 
             ?>

            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
          <?php 
           //include_once './Views/includes/thirdcard.php' 
           ?>

            <!-- /.card -->

            <?php  
            
          //include_once './Views/includes/forthcard.php'
             ?>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

  <?php  include_once './Views/includes/footer.php' ?>
