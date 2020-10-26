<?php
  include_once "includes/funciones/sesiones.php";
  include_once "includes/funciones/funciones.php";
  include_once "includes/templates/header.php";
  include_once "includes/templates/barra.php";
  include_once "includes/templates/navegador.php";

  $id =(int) ($_GET['id']);
  try {
    $stmt = $conn->prepare("SELECT usuario, password FROM admins WHERE id_admin = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($usuario_admin, $password_admin);
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
            <h1>Edita el Administrador</h1>
            <small>llena el formulario para editar el Administrador</small>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">editar admin</h3>
        </div>
        <div class="card-body">
          <form role="form"  method="post" id="editar_admin" action="insertar_admin.php" name="editar-admin" >
              <div class="form-group">
                <label for="exampleInputEmail1">usuario:</label>
                <input type="text" class="form-control"  id="usuario"  name="usuario" placeholder="usuario" value="<?php echo $usuario_admin; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contrasenia:</label>
                <input type="password" class="form-control" id="Password"  name="password" placeholder="contrasenia">
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="editar" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-primary" name="editar" value="1">editar</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </section>

  </div><!-- /.content-wrapper -->

<?php
  include_once "includes/templates/footer.php";
 ?>
