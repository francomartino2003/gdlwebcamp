<?php
session_start();
if ($_GET[cerrar_sesion]) {
  session_destroy();
}
  include_once "includes/templates/header.php";
 ?>

  <div class="hold-transition login-page">

      <div class="login-box">
        <div class="login-logo">
          <a href="../index.php"><b>GDL</b>web camp</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">inicia sesion</p>

            <form action="insertar_admin.php" id="login_admin" method="post" name="login_admin">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="usuario" placeholder="usuario">
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-12">
                  <input type="hidden" name="login" value="1">
                  <button type="submit" class="btn btn-primary btn-block">iniciar sesion</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>

</div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/sweetalert.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/admin.js"></script>
</body>
</html>
