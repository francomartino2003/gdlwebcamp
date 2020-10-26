<?php include_once 'includes/templates/header.php'; ?>

<section class="contenedor seccion">
  <h2>calendario de eventos</h2>

  <?php
    try{
      require_once('includes/funciones/bd_coneccion.php');
      $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado";
      $sql .= " FROM eventos";
      $sql .= " INNER JOIN categoria_evento";
      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
      $sql .= " INNER JOIN invitados";
      $sql .= " ON eventos.id_inv = invitados.invitado_id";
      $sql .= " ORDER BY evento_id";
      $resultado = $conn->query($sql);

    }catch(\Exception $e){
      echo $e->getMessage();
    }
   ?>

   <div class="calendario Clearfix">
     <?php
        $calendario = array();
        while ($imprimir = $resultado->fetch_assoc()) {


          $evento = array(
            'titulo' => $imprimir['nombre_evento'],
            'fecha' => $imprimir['fecha_evento'],
            'hora' => $imprimir['hora_evento'],
            'categoria' => $imprimir['cat_evento'],
            'icono' => "fa " . $imprimir['icono'],
            'invitado' => $imprimir['nombre_invitado'] . " " . $imprimir['apellido_invitado']
           );

           $calendario[$imprimir['fecha_evento']][] = $evento;

        }?>

        <?php
        foreach ($calendario as $dia => $lista_eventos) { ?>
          <br>
          <h3 class="dia_eventos">
              <i class="fa fa-calendar"></i>
              <?php
                  setlocale(LC_TIME, 'spanish');
                  echo strftime("%A, %d de %B del %Y", strtotime($dia));
               ?>
          </h3>
          <?php foreach ($lista_eventos as $value) { ?>
            <div class="dia">
               <p class="titulo"><?php echo $value['titulo']; ?></p>
               <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo $value['fecha'] . " " . $value['hora']; ?></p>
               <p><i class="<?php echo $value['icono']; ?>" aria-hidden="true"></i>  <?php echo $value['categoria']; ?></p>
               <p><i class="fa fa-user" aria-hidden="true"></i>  <?php echo $value['invitado']; ?></p>
            </div>
          <?php } ?>
          <br>
          <?php } ?>
   </div>

   <?php
     $conn->close();
    ?>
</section>


<?php include_once 'includes/templates/footer.php'; ?>
