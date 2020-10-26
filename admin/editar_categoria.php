<?php
  include_once "includes/funciones/sesiones.php";
  include_once "includes/funciones/funciones.php";
  include_once "includes/templates/header.php";
  include_once "includes/templates/barra.php";
  include_once "includes/templates/navegador.php";

  $id =(int) ($_GET['id']);
  try {
    $stmt = $conn->prepare("SELECT cat_evento, icono FROM categoria_evento WHERE id_categoria = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nombre, $icono);
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
            <h1>Edita la categoria</h1>
            <small>llena el formulario para editar la categoria</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear categoria</h3>
        </div>
        <div class="card-body">
          <form role="form"  method="post" id="editar_categoria" action="insertar_admin.php" name="editar-categoria" >
              <div class="form-group">
                <label for="exampleInputEmail1">categoria:</label>
                <input type="text" class="form-control"  id="nombre"  name="nombre" placeholder="categoria" value = "<?php echo $nombre; ?>">
              </div>
              <div class="form-group iconpicker-container">
                <label for="">icono:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text"><i class="far fa-address-book"></i></span>
                  </div>
                  <input id="icono" type="text" value = "<?php echo $icono; ?>" class="form-control icp icp-auto iconpicker-element iconpicker-input pull-right"  name="icono" placeholder="fa-icon">
                </div>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="editar_categoria" value="<?php echo $id; ?>">
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
