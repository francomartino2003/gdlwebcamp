<?php
//funcion productos
  function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0){
   //boletos
    $dias = array(0 => "un_dia", 1 => "pase_completo", 2 => "pase_2dias");
    $total_boletos = array_combine($dias, $boletos);
    $json = array();

    foreach ($total_boletos as $key => $value) {
      if ($value != "") {
        if ((int)$value > 0) {
          $json[$key] = (int)$value;
        }
      }
    }

    //$camisas
     $camisas = (int)$camisas;
     if ($camisas > 0) {
       $json['camisas'] = $camisas;
     }

     //etiquetas
      $etiquetas = (int)$etiquetas;
      if ($etiquetas > 0) {
        $json['etiquetas'] = $etiquetas;
      }

      return json_encode($json);
  }


//fucnion eventos
  function eventos_json(&$eventos){
     $eventos_json = array();
    foreach ($eventos as $evento) {
      $eventos_json['eventos'][] = $evento;
    }
    return json_encode($eventos_json);

  }
 ?>
