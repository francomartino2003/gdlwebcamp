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
              <h3 class="card-title">Listado de administradores</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>usuario</th>
                  <th>acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                       try {
                         $stmt = $conn->query("SELECT id_admin, usuario FROM admins;");
                       } catch (Exception $e) {
                         echo "error:" . $e->getMessage();
                         echo "string";
                       }

                       while ($respuesta = $stmt->fetch_assoc()) { ?>
                         <tr>
                           <td><?php echo $respuesta['id_admin']; ?></td>
                           <td><?php echo $respuesta['usuario']; ?></td>
                           <td>
                              <a href="editar_admin.php?id=<?php echo $respuesta['id_admin']; ?>"  class="btn bg-orange btn-flat margin">
                                   <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a href="#" data-id="<?php echo $respuesta['id_admin']; ?>" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar-registro">
                                   <i class="fa fa-trash"></i>
                              </a>
                           </td>
                         </tr>
                      <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>usuarios</th>
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
