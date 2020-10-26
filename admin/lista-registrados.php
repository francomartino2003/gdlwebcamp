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
              <h3 class="card-title">Listado de registrados</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>nombre</th>
                  <th>email</th>
                  <th>fecha</th>
                  <th>pases</th>
                  <th>talleres</th>
                  <th>regalo</th>
                  <th>total pagado</th>
                  <th>acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                       try {
                         $stmt = $conn->query("SELECT registrados.*, regalos.nombre_regalo  FROM registrados INNER JOIN regalos ON registrados.regalo = regalos.ID_regalo;");
                       } catch (Exception $e) {
                         echo "error:" . $e->getMessage();
                         echo "string";
                       }

                       while ($respuesta = $stmt->fetch_assoc()) { ?>
                         <tr>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td><?php echo $respuesta['cat_evento']; ?></td>
                           <td>
                              <a href="editar_categoria.php?id=<?php echo $respuesta['id_categoria']; ?>"  class="btn bg-orange btn-flat margin">
                                   <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a href="#" data-id="<?php echo $respuesta['id_categoria']; ?>" data-tipo="cat" class="btn bg-maroon btn-flat margin borrar-registro-cat">
                                   <i class="fa fa-trash"></i>
                              </a>
                           </td>
                         </tr>
                      <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>nombre</th>
                  <th>email</th>
                  <th>fecha</th>
                  <th>pases</th>
                  <th>talleres</th>
                  <th>regalo</th>
                  <th>total pagado</th>
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
