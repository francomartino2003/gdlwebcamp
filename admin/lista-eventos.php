<?php
  include_once "includes/funciones/sesiones.php";
  include_once "includes/funciones/funciones.php";
  include_once "includes/templates/header.php";
  include_once "includes/templates/barra.php";
  include_once "includes/templates/navegador.php";
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado de eventos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>nombre</th>
                  <th>fecha</th>
                  <th>hora</th>
                  <th>categoria</th>
                  <th>invitado</th>
                  <th>acciones</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                       try {
                         $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv = invitados.invitado_id";
                         $stmt = $conn->query($sql);
                       } catch (Exception $e) {
                         echo "error:" . $e->getMessage();
                         echo "string";
                       }

                       while ($respuesta = $stmt->fetch_assoc()) { ?>
                         <tr>
                           <td><?php echo $respuesta['nombre_evento']; ?></td>
                           <td><?php echo $respuesta['fecha_evento']; ?></td>
                           <td><?php echo $respuesta['hora_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['nombre_invitado'] . " " . $respuesta['apellido_invitado']; ?></td>
                           <td>
                              <a href="editar_evento.php?id=<?php echo $respuesta['evento_id']; ?>"  class="btn bg-orange btn-flat margin">
                                   <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a href="#" data-id="<?php echo $respuesta['evento_id']; ?>" data-tipo="admin" class="btn bg-maroon btn-flat margin editar-registro">
                                   <i class="fa fa-trash"></i>
                              </a>
                           </td>
                         </tr>
                      <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>nombre</th>
                  <th>fecha</th>
                  <th>hora</th>
                  <th>categoria</th>
                  <th>invitado</th>
                  <th>acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div><!-- /.content-wrapper -->


<?php
  include_once "includes/templates/footer.php";
 ?>
