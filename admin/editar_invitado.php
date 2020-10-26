<?php
  include_once "includes/funciones/sesiones.php";
  include_once "includes/funciones/funciones.php";
  include_once "includes/templates/header.php";
  include_once "includes/templates/barra.php";
  include_once "includes/templates/navegador.php";

  $id =(int) ($_GET['id']);
  try {
    $stmt = $conn->prepare("SELECT nombre_invitado, apellido_invitado, descripcion, url_imagen FROM invitados WHERE invitado_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nombre, $apellido, $descripcion, $imagen);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {

  }
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edita el invitado</h1>
            <small>llena el formulario para editar el invitado</small>
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
          <form role="form"  method="post" id="editar_invitado" action="insertar_admin.php" name="editar-invitado" >
              <div class="form-group">
                <label for="">nombre:</label>
                <input type="text" class="form-control"  id="nombre"  name="nombre" placeholder="nombre" value="<?php echo $nombre; ?>">
              </div>
              <div class="form-group">
                <label for="">apellido:</label>
                <input type="text" class="form-control"  id="apellido"  name="apellido" placeholder="apellido" value="<?php echo $apellido; ?>">
              </div>
              <div class="form-group">
                <label for="descripcion">descripcion:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" rows="8"> <?php echo $descripcion; ?> </textarea>
              </div>
              <div class="form-group">
                  <label for="">Imagen actual:</label>
                  <br>
                  <img src="../img/invitados/<?php echo $imagen; ?>" alt="" width="200 px">
              </div>
              <div class="form-group">
                <label for="exampleInputFile"> nueva Imagen:</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen">
                    <label class="custom-file-label" for="exampleInputFile">sube tu archivo</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">actualizar</span>
                  </div>
                </div>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="editar_invitado" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-primary">editar</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section>

  </div><!-- /.content-wrapper -->

<?php
  include_once "includes/templates/footer.php";
 ?>
