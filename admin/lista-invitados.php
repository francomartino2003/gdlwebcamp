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
              <h3 class="card-title">Listado de invitados</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>nombre</th>
                  <th>descripcion</th>
                  <th>imagen</th>
                  <th>acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                       try {
                         $stmt = $conn->query("SELECT * FROM invitados;");
                       } catch (Exception $e) {
                         echo "error:" . $e->getMessage();
                         echo "string";
                       }

                       while ($respuesta = $stmt->fetch_assoc()) { ?>
                         <tr>
                           <td><?php echo $respuesta['nombre_invitado'] . " " . $respuesta['apellido_invitado']; ?></td>
                           <td><?php echo $respuesta['descripcion']; ?></td>
                           <td><?php echo $respuesta['url_imagen']; ?></td>
                           <td>
                              <a href="editar_invitado.php?id=<?php echo $respuesta['invitado_id']; ?>"  class="btn bg-orange btn-flat margin">
                                   <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a href="#" data-id="<?php echo $respuesta['invitado_id']; ?>"  class="btn bg-maroon btn-flat margin borrar-invitado">
                                   <i class="fa fa-trash"></i>
                              </a>
                           </td>
                         </tr>
                      <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>nombre</th>
                  <th>descripcion</th>
                  <th>imagen</th>
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
