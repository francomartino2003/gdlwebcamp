<?php
  include_once "includes/funciones/sesiones.php";
  include_once "includes/funciones/funciones.php";
  include_once "includes/templates/header.php";
  include_once "includes/templates/barra.php";
  include_once "includes/templates/navegador.php";
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Administrador</h1>
            <small>llena el formulario para crear un Administrador</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear admin</h3>
        </div>
        <div class="card-body">
          <form role="form"  method="post" id="crear_admin" action="insertar_admin.php" name="crear-admin" >
              <div class="form-group">
                <label for="exampleInputEmail1">usuario:</label>
                <input type="text" class="form-control"  id="usuario"  name="usuario" placeholder="usuario">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contrasenia:</label>
                <input type="password" class="form-control" id="Password"  name="password" placeholder="contrasenia">
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="agregar" value="1">
              <button type="submit" class="btn btn-primary" name="agregar" value="1">agregar</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section>

  </div><!-- /.content-wrapper -->

<?php
  include_once "includes/templates/footer.php";
 ?>
