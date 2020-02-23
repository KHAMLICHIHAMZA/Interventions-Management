
<?php
$data= new UsersController();
$users= $data->getAllUsers();
$dd=$data->getOnUser();

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/sdis68.png" alt="AdminLTE Logo" class="brand-image img-responsive elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">gestion d'intervention </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/pompier.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php    ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-fire-extinguisher"></i>
              <p>
                Inteventions
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
<<<<<<< HEAD

            <li class="nav-item">
                <a href="index.php?c=InterventionsController&m=getAll"  class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        liste des Inteventions
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="index.php?c=InterventionsController&m=getAll"  class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Rapport en cours de validation
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="index.php?c=InterventionsController&m=getAll"  class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Rapport en cours de Redaction
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="index.php?c=userscontroller&m=getAllUsers" class="nav-link">
                    <i class="nav-icon fas fa-fire-extinguisher"></i>
                    <p>
                        liste des utilisateurs
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>
=======
     
>>>>>>> 93b9e6ebdcf166d670cbd2de18bb02550a589fcb

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Analyses
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Engines
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Archives
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

   
      
  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>