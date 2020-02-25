
<?php
/*
$data= new UsersController();
$users= $data->getAllUsers();
$dd=$data->getOnUser();
*/

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
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-fire-extinguisher"></i>
              <p>
                Inteventions
                <span class="right badge badge-danger"></span>
              </p>
            </a>

          </li>


            <li class="nav-item">
                <a href="index.php?c=InterventionsController&m=getAll"  class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        liste des Inteventions
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Rapport
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="index.php?c=InterventionsController&m=redactionRapport" class="nav-link">
                            <i class="nav-icon fas fa-pencil "></i>
                            <p>Rediger Rapport</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?c=InterventionsController&m=validationRapport" class="nav-link">
                            <i class="nav-icon fas fa-layers-text "></i>
                            <p>Valider Rapport</p>
                        </a>
                    </li>

                </ul>
            </li>

            
          </li>
     


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
          <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Archive
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="index.php?c=ArchiveController&m=getAll" class="nav-link">
                            <i class="nav-icon fas fa-pencil "></i>
                            <p>Liste des interventions</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?c=InterventionsController&m=validationRapport" class="nav-link">
                            <i class="nav-icon fas fa-layers-text "></i>
                            <p>Valider Rapport</p>
                        </a>
                    </li>

                </ul>
            </li>

   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>