
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link logo">
      <span class="logo-mini">GDL</span>
      <span class="brand-text font-weight-light">webCamp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Franco martino</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Eventos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-eventos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear_evento.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>agregar</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Categoria eventos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-Categorias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear_categoria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>agregar</p>
                </a>
              </li>
            </ul>
          </li>
  <!-- Sidebar Menu
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Invitados
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-invitados.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear_invitado.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>agregar</p>
                </a>
              </li>
            </ul>
          </li>      -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Registrados
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>agregar</p>
                </a>
              </li>
            </ul>
          </li>
<?php if ($_SESSION['nivel'] > 0) {  ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Administradores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>agregar</p>
                </a>
              </li>
            </ul>
          </li>

          <?php } ?>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-comments"></i>
              <p>
                Testimoniales
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>agregar</p>
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
