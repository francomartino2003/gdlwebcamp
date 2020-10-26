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
            <h1>Crear evento</h1>
            <small>llena el formulario para crear un Evento</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear evento</h3>
        </div>
        <div class="card-body">
          <form role="form"  method="post" id="crear_evento" action="insertar_admin.php" name="crear-evento">
              <div class="form-group">
                <label for="exampleInputEmail1">nombre:</label>
                <input type="text" class="form-control"  id="usuario"  name="nombre" placeholder="nombre">
              </div>
              <div class="form-group">
                <label>Fecha del evento:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask-alias="datetime" name="fecha" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
              </div>
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora del evento:</label>
                  <div class="input-group date" id="timepicker" data-target-input="nearest">
                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    <input type="text" class="form-control datetimepicker-input" name="hora" data-target="#timepicker"/>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Categoria del evento:</label>
                <select class="form-control select2" name="categoria" style="width: 100%;">
                  <option selected="selected">--seleccione una categoria--</option>
                     <?php
                        try {
                          $sql = "SELECT id_categoria, cat_evento FROM categoria_evento;";
                          $stmt = $conn->query($sql);
                          while ($respuesta = $stmt->fetch_assoc()) {
                              echo "<option value=" . $respuesta['id_categoria'] ." >";
                              echo $respuesta['cat_evento'];
                              echo "</option>";
                        }
                          $stmt->close();
                        } catch (\Exception $e) {
                        }
                      ?>
                </select>
              </div>
              <div class="form-group">
                <label>Invitado del evento:</label>
                <select class="form-control select2" name="invitado" style="width: 100%;">
                  <option selected="selected">--seleccione una categoria--</option>
                  <?php
                     try {
                       $sql = "SELECT invitado_id, nombre_invitado, apellido_invitado FROM invitados;";
                       $stmt = $conn->query($sql);
                       while ($respuesta = $stmt->fetch_assoc()) {
                           echo "<option value=" . $respuesta['invitado_id'] ." >";
                           echo $respuesta['nombre_invitado'] . " " . $respuesta['apellido_invitado'];
                           echo "</option>";
                     }
                       $stmt->close();
                       $conn->close();
                     } catch (\Exception $e) {
                     }
                   ?>
                </select>
              </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="agregar_evento" value="1">
              <button type="submit" class="btn btn-primary" name="agregar_evento" value="1">agregar</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section>

  </div><!-- /.content-wrapper -->

<?php
  include_once "includes/templates/footer.php";
 ?>
