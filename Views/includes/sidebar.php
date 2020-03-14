
<?php
/*
$data= new UsersController();
$users= $data->getAllUsers();
$dd=$data->getOnUser();
*/
require_once 'Controllers/InterventionsController.php';
$Intervention = new InterventionsController();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
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
        <span>  <?php if( isset( $_SESSION['username'] ) ) echo  $_SESSION['username'] ?></span>
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



            <li  class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Intervention
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li  class="nav-item">
                        <a href="/Interventions-Management/interventionAdd" class="nav-link">
                            <i class="nav-icon fas fa-pencil "></i>
                            <p>ajout intervention</p>
                        </a>
                    </li>

                    <li  class="nav-item">
                        <a href="index.php?c=InterventionsController&m=getAll" class="nav-link">
                            <i class="nav-icon fas fa-pencil "></i>
                            <p>liste intervention</p>
                        </a>
                    </li>


                </ul>
            </li>



            <li <?php if ($Intervention->ispersonnel($_SESSION['username']) == true) echo 'hidden' ?> class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Rapport
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li <?php if ($Intervention->isresponsable($_SESSION['username']) == false) echo 'hidden' ?>  class="nav-item">
                        <a href="index.php?c=InterventionsController&m=listeIRapportnonrediger" class="nav-link">
                            <i class="nav-icon fas fa-pencil "></i>
                            <p>Rediger Rapport</p>
                        </a>
                    </li>

                    <li <?php if ($Intervention->isresponsable($_SESSION['username']) == false) echo 'hidden' ?> class="nav-item">
                        <a href="index.php?c=RapportsController&m=listeAllrapportresponsable" class="nav-link">
                            <i class="nav-icon fas fa-pencil "></i>
                            <p>liste all rapport</p>
                        </a>
                    </li>
                    <div  >
                        <li  <?php if ($Intervention->isresponsable($_SESSION['username']) == true) echo 'hidden' ?>  class="nav-item">
                            <a href="index.php?c=InterventionsController&m=listeallrapportchef" class="nav-link">
                                <i class="nav-icon fas fa-layers-text "></i>
                                <p>Valider Rapport</p>
                            </a>
                        </li>
                    </div>

                </ul>
            </li>







          <li class="nav-item">
            <a href="http://localhost/Interventions-Management/analyses" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Analyses
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>


          <li class="nav-item">
                <a href="http://localhost/Interventions-Management/parame"  class="nav-link">
                    <i class="nav-icon fas fa-calendar"></i>
                    <p>
                    paramètres                     </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="index.php?c=ArchiveController&m=getAll" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Archive
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