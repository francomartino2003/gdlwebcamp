
  <?php
    try{
      require_once('includes/funciones/bd_coneccion.php');
      $sql = "SELECT * FROM `invitados`";
      $resultado = $conn->query($sql);

    }catch(\Exception $e){
      echo $e->getMessage();
    }
   ?>

   <section class="invitados contenedor seccion">
     <h2>nuestros invitados</h2>
     <ul class="lista-invitados">
      <?php while ($imprimir = $resultado->fetch_assoc()) { ?>
        <li>
          <div class="invitado">
            <a class="invitado_info" href="#invitado<?php echo $imprimir['invitado_id'];?>">
            <img src="img/<?php echo $imprimir["url_imagen"]; ?>" alt="imagen invitado">
            <p><?php echo $imprimir["nombre_invitado"] . " " . $imprimir["apellido_invitado"]; ?></p>
            </a>
          </div>
        </li>
        <div style="display:none">
          <div class="invitado_info" id="invitado<?php echo $imprimir['invitado_id'];?>">
              <h2><?php echo $imprimir["nombre_invitado"] . " " . $imprimir["apellido_invitado"]; ?></h2>
              <img src="img/<?php echo $imprimir["url_imagen"]; ?>" alt="imagen invitado">
              <p><?php echo $imprimir['descripcion'];?></p>
          </div>
        </div>
     <?php } ?>
   </ul>
 </section>


   <?php
     $conn->close();
    ?>
