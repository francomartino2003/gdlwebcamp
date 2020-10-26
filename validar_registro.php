<?php
if (isset($_POST['submit'])) {
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $email = $_POST['email'];
   $regalo = $_POST['regalo'];
   $total = $_POST['total_pedido'];
   date_default_timezone_set('America/Argentina/Buenos_Aires');
   $fecha = date('Y-m-d H:i:s');
   //pedidos
   $boletos = $_POST['boletos'];
   $camisas = $_POST['pedido_camisa'];
   $etiquetas = $_POST['pedido_etiquetas'];
   include_once 'includes/funciones/funciones.php';
   $pedido = productos_json($boletos, $camisas, $etiquetas);
  //eventos
  $registro = "";
  if ($_POST['registro']) {
    $eventos = $_POST['registro'];
    $registro = eventos_json($eventos);
  }
  try{
    require_once('includes/funciones/bd_coneccion.php');
    $stmt = $conn -> prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registrado, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssis",$nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('Location: validar_registro.php?exitoso=1');
  }catch(\Exception $e){
    echo $e->getMessage();
  }
   }
     include_once 'includes/templates/header.php';
   ?>

  <section class="seccion contenedor">
    <?php if (isset($_GET['exitoso'])) {
       if ($_GET['exitoso'] == "1") { ?>
         <h2>registro exitoso</h2>
         <p>resumen llegara por mail</p>
    <?php   }
        } ?>
   </section>

<?php include_once 'includes/templates/footer.php'; ?>
