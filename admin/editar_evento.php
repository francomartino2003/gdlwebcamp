<?php
  include_once "includes/funciones/sesiones.php";
  include_once "includes/funciones/funciones.php";
  include_once "includes/templates/header.php";
  include_once "includes/templates/barra.php";
  include_once "includes/templates/navegador.php";

  $id =(int) ($_GET['id']);
  try {
    $stmt = $conn->prepare("SELECT evento_id, nombre_evento, fecha_evento, hora_evento, id_cat_evento, id_inv FROM eventos  WHERE evento_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id, $nombre,$fecha, $hora, $cat, $inv);
    $stmt->fetch();
    $stmt->close();
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
            <h1>Edita el evento</h1>
            <small>llena el formulario para editar el evento</small>
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
          <form role="form"  method="post" id="editar_evento" action="insertar_admin.php" name="editar-evento">
              <div class="form-group">
                <label for="exampleInputEmail1">nombre:</label>
                <input type="text" class="form-control"  id="usuario"  name="nombre" placeholder="nombre" value="<?php echo $nombre; ?>">
              </div>
              <div class="form-group">
                <label>Fecha del evento:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask-alias="datetime" name="fecha" data-inputmask-inputformat="dd/mm/yyyy" value="<?php echo $fecha; ?>" data-mask>
                </div>
              </div>
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora del evento:</label>
                  <div class="input-group date" id="timepicker" data-target-input="nearest">
                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                    <input type="text" class="form-control datetimepicker-input" name="hora" value="<?php echo $hora ?>" data-target="#timepicker"/>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Categoria del evento:</label>
                <select class="form-control select2" name="categoria" style="width: 100%;">
                     <?php
                        try {
                          $sql = "SELECT id_categoria, cat_evento FROM categoria_evento;";
                          $stmt = $conn->query($sql);
                          while ($respuesta = $stmt->fetch_assoc()) {
                            if ($respuesta['id_categoria'] == $cat) {
                              echo '<option selected="selected" value=' . $respuesta['id_categoria'] .' >';
                              echo $respuesta['cat_evento'];
                              echo "</option>";
                            }else {
                              echo "<option value=" . $respuesta['id_categoria'] ." >";
                              echo $respuesta['cat_evento'];
                              echo "</option>";
                            }
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
                  <?php
                     try {
                       $sql = "SELECT invitado_id, nombre_invitado, apellido_invitado FROM invitados;";
                       $stmt = $conn->query($sql);
                       while ($respuesta = $stmt->fetch_assoc()) {
                         if ($respuesta['invitado_id'] == $inv) {
                           echo '<option selected="selected" value=' . $respuesta['invitado_id'] .' >';
                           echo $respuesta['nombre_invitado'] . " " . $respuesta['apellido_invitado'];
                           echo "</option>";
                         }else {
                           echo "<option value=" . $respuesta['invitado_id'] ." >";
                           echo $respuesta['nombre_invitado'] . " " . $respuesta['apellido_invitado'];
                           echo "</option>";
                         }
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
              <input type="hidden" name="editar_evento" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-primary" >editar</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section>

  </div><!-- /.content-wrapper -->

<?php
  include_once "includes/templates/footer.php";
 ?>
