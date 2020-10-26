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
            <h1>Crear Invitado</h1>
            <small>llena el formulario para crear un invitado</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear invitado</h3>
        </div>
        <div class="card-body">
          <form role="form"  method="post" id="crear_invitado" action="insertar_admin.php" name="crear-invitado" >
              <div class="form-group">
                <label for="">nombre:</label>
                <input type="text" class="form-control"  id="nombre"  name="nombre" placeholder="nombre">
              </div>
              <div class="form-group">
                <label for="">apellido:</label>
                <input type="text" class="form-control"  id="apellido"  name="apellido" placeholder="apellido" >
              </div>
              <div class="form-group">
                <label for="descripcion">descripcion:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" rows="8" ></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Imagen:</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen">
                    <label class="custom-file-label" for="exampleInputFile">sube tu archivo</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">subir</span>
                  </div>
                </div>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="agregar_invitado" value="1">
              <button type="submit" class="btn btn-primary">agregar</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section>

  </div><!-- /.content-wrapper -->

<?php
  include_once "includes/templates/footer.php";
 ?>
