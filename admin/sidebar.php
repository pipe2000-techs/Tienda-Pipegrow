<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="vistapanel.php" class="brand-link navbar-teal">
      <img src="../logo/fav.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PipeGrow</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/admin/<?php echo $foto?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block" href="javascript:void(0);" data-toggle="modal" data-target="#admin"><?php echo $nombre?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview ">
            <a href="vistapanel.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inincio
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Productos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="vistaproductos-registrados.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Productos Registrados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vistaproductos-nevo-producto.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Nuevo Producto</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="vistaventas.php" class="nav-link ">
              <i class="nav-icon icon-signal"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>