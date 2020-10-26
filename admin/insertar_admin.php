<?php
//Administradores-------------------------------------------------------------------------------------------------
//agregar
if(isset($_POST["agregar"])){
 //die(json_encode($_POST));
  $usuario = $_POST["usuario"];
  $password = $_POST["password"];
  $password_hash = password_hash($password, PASSWORD_BCRYPT);

   try {
  include_once "includes/funciones/funciones.php";
  $stmt = $conn->prepare("INSERT INTO admins (usuario, password) VALUES(?, ?)");
  $stmt->bind_param("ss", $usuario , $password_hash);
  $stmt->execute();
  $id = $stmt->insert_id;
  if ($stmt->affected_rows) {

     $respuesta = array(
       'respuesta' => 'exito',
       'id_admin' => $id
     );
    }else {
    $respuesta = array(
      'respuesta' => 'error',
    );
  }
  $stmt->close();
  $conn->close();
   } catch (Exception $e) {
  echo "error" . $e->getMessage();
  }
 die(json_encode($respuesta));

  }

//login
if(isset($_POST["login"])){
 //die(json_encode($_POST));
  $usuario = $_POST["usuario"];
  $password = $_POST["password"];

  try {
  include_once "includes/funciones/funciones.php";
  $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
  $stmt->bind_param('s', $usuario);
  $stmt->execute();
  $stmt->bind_result($admin_id, $admin_usuario, $admin_password, $nivel);
  if ($stmt->affected_rows) {
    if ($stmt->fetch()) {
      if (password_verify($password, $admin_password)) {
        session_start();
        $_SESSION["usuario"] = $admin_usuario;
        $_SESSION["nivel"] = $nivel;
        $respuesta = array(
          'respuesta' => 'correcto',
        );
      }else{
      $respuesta = array(
        'respuesta' => 'no_password',
      );
     }
    }else{
      $respuesta = array(
        'respuesta' => 'no_existe',
      );
    }
  }else {
    $respuesta = array(
      'respuesta' => 'error',
    );
  }
  $stmt->close();
  $conn->close();
  } catch (Exception $e) {
  echo "error" . $e->getMessage();
  }

   die(json_encode($respuesta));

}

//editar
if(isset($_POST["editar"])){

  $usuario = $_POST["usuario"];
  $password = $_POST["password"];
  $id = (int)($_POST['editar']);

    if (empty($password)) {
      include_once "includes/funciones/funciones.php";
      $stmt = $conn->prepare("UPDATE admins SET usuario = ? WHERE id_admin = ?;");
      $stmt->bind_param('si', $usuario, $id);
    }else {
      include_once "includes/funciones/funciones.php";
      $password_hash = password_hash($password, PASSWORD_BCRYPT);
      $stmt = $conn->prepare("UPDATE admins SET usuario = ?, password = ? WHERE id_admin = ?;");
      $stmt->bind_param('ssi', $usuario,$password_hash, $id);
    }

  try {
  $stmt->execute();
  if ($stmt->affected_rows) {
      $respuesta = array(
        'respuesta' => 'correcto'
      );
  }else {
    $respuesta = array(
      'respuesta' => 'error'
    );
  }
  $stmt->close();
  $conn->close();
  } catch (Exception $e){
  echo "error" . $e->getMessage();
}
   die(json_encode($respuesta));
}
//borrar
if(isset($_POST["borrar"])){
  $id = (int)($_POST["id"]);
  try {
 include_once "includes/funciones/funciones.php";
 $stmt = $conn->prepare("DELETE FROM admins WHERE id_admin = ?");
 $stmt->bind_param("i", $id);
 $stmt->execute();
 if ($stmt->affected_rows) {

    $respuesta = array(
      'respuesta' => 'correcto',
    );
   }else {
   $respuesta = array(
     'respuesta' => 'error',
   );
 }
 $stmt->close();
 $conn->close();
  } catch (Exception $e) {
 echo "error" . $e->getMessage();
 }
 die(json_encode($respuesta));
}

//eventos--------------------------------------------------------------------------------------------------------
//agregar
if(isset($_POST["agregar_evento"])){
  $nombre = $_POST["nombre"];
  $fecha = $_POST["fecha"];
  $fecha_formateada = date('Y-m-d', strtotime($fecha));
  $hora = $_POST["hora"];
  $hora_formateada = date('H:i:s', strtotime($hora));
  $categoria = (int)($_POST["categoria"]);
  $invitado = (int)($_POST["invitado"]);
   try {
  include_once "includes/funciones/funciones.php";
  $stmt = $conn->prepare("INSERT INTO eventos (nombre_evento, fecha_evento, hora_evento, id_cat_evento, id_inv) VALUES(?, ?, ?, ?, ?)");
  $stmt->bind_param("sssii", $nombre , $fecha_formateada, $hora_formateada, $categoria, $invitado);
  $stmt->execute();
  $id = $stmt->insert_id;
  if ($stmt->affected_rows) {
  if ($id > 0) {
    $respuesta = array(
      'respuesta' => 'exito',
      'id_admin' => $id
    );
  }else {
    $respuesta = array(
      'respuesta' => 'error',
    );
  }

    }else {
    $respuesta = array(
      'respuesta' => 'error',
    );
  }
  $stmt->close();
  $conn->close();
   } catch (Exception $e) {
     $respuesta = array(
       'respuesta' => "error" . $e->getMessage(),
     );
  }
   die(json_encode($respuesta));
  }

//editar
if(isset($_POST["editar_evento"])){
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $fecha_formateada = date('Y-m-d', strtotime($fecha));
    $hora = $_POST["hora"];
    $hora_formateada = date('H:i:s', strtotime($hora));
    $categoria = (int)($_POST["categoria"]);
    $invitado = (int)($_POST["invitado"]);
    $id = (int)($_POST["editar_evento"]);
     try {
    include_once "includes/funciones/funciones.php";
    $stmt = $conn->prepare("UPDATE eventos SET nombre_evento = ?, fecha_evento = ?, hora_evento = ?, id_cat_evento = ?, id_inv = ? WHERE evento_id = ?");
    $stmt->bind_param("sssiii", $nombre , $fecha_formateada, $hora_formateada, $categoria, $invitado, $id);
    $stmt->execute();
    if ($stmt->affected_rows) {
       $respuesta = array(
         'respuesta' => 'exito',
       );
      }else {
      $respuesta = array(
        'respuesta' => 'error',
      );
    }
    $stmt->close();
    $conn->close();
     } catch (Exception $e) {
       $respuesta = array(
         'respuesta' => "error" . $e->getMessage(),
       );
    }
   die(json_encode($respuesta));
    }

//borrar
if(isset($_POST["borrar_evento"])){
      $id = (int)($_POST["id"]);
      try {
     include_once "includes/funciones/funciones.php";
     $stmt = $conn->prepare("DELETE FROM eventos WHERE evento_id = ?");
     $stmt->bind_param("i", $id);
     $stmt->execute();
     if ($stmt->affected_rows) {
        $respuesta = array(
          'respuesta' => 'correcto',
        );
       }else {
       $respuesta = array(
         'respuesta' => 'error',
       );
     }
     $stmt->close();
     $conn->close();
      } catch (Exception $e) {
     echo "error" . $e->getMessage();
     }
     die(json_encode($respuesta));
    }


// categoria eventos--------------------------------------------------------------------------------------------------------
//agregar
if(isset($_POST["agregar_categoria"])){
      $nombre = $_POST["nombre"];
      $icono = $_POST["icono"];
       try {
      include_once "includes/funciones/funciones.php";
      $stmt = $conn->prepare("INSERT INTO categoria_evento (cat_evento, icono) VALUES(?,?)");
      $stmt->bind_param("ss", $nombre , $icono);
      $stmt->execute();
      $id = $stmt->insert_id;
      if ($stmt->affected_rows) {
      if ($id > 0) {
        $respuesta = array(
          'respuesta' => 'exito',
          'id_admin' => $id
        );
      }else {
        $respuesta = array(
          'respuesta' => 'error',
        );
      }

        }else {
        $respuesta = array(
          'respuesta' => 'error',
        );
      }
      $stmt->close();
      $conn->close();
       } catch (Exception $e) {
         $respuesta = array(
           'respuesta' => "error" . $e->getMessage(),
         );
      }
       die(json_encode($respuesta));
      }


//editar
if(isset($_POST["editar_categoria"])){

  $nombre = $_POST["nombre"];
  $icono = $_POST["icono"];
  $id = (int)($_POST['editar_categoria']);

            include_once "includes/funciones/funciones.php";
            $stmt = $conn->prepare("UPDATE categoria_evento SET cat_evento = ?, icono = ? WHERE id_categoria = ?;");
            $stmt->bind_param('ssi', $nombre,$icono, $id);

        try {
        $stmt->execute();
        if ($stmt->affected_rows) {
            $respuesta = array(
              'respuesta' => 'correcto'
            );
        }else {
          $respuesta = array(
            'respuesta' => 'error'
          );
        }
        $stmt->close();
        $conn->close();
        } catch (Exception $e){
        echo "error" . $e->getMessage();
      }
  die(json_encode($respuesta));
}

//borrar
if(isset($_POST["borrar_categoria"])){
      $id = (int)($_POST["id"]);
      try {
     include_once "includes/funciones/funciones.php";
     $stmt = $conn->prepare("DELETE FROM categoria_evento WHERE id_categoria = ?");
     $stmt->bind_param("i", $id);
     $stmt->execute();
     if ($stmt->affected_rows) {
        $respuesta = array(
          'respuesta' => 'correcto',
        );
       }else {
       $respuesta = array(
         'respuesta' => 'error',
       );
     }
     $stmt->close();
     $conn->close();
      } catch (Exception $e) {
     echo "error" . $e->getMessage();
     }
     die(json_encode($respuesta));
    }


// invitados--------------------------------------------------------------------------------------------------------
//agregar
if(isset($_POST["agregar_invitado"])){

          $nombre = $_POST["nombre"];
          $apellido = $_POST["apellido"];
          $descripcion = $_POST["descripcion"];

          $directorio = '../img/invitados/';
      if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
      }

      if (move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $_FILES['imagen']['name'])) {
        $imagen = $_FILES['imagen']['name'];
        $imagen_estado = 'correcto';
      }else {
        $imagen_estado = 'error';
      }

           try {
          include_once "includes/funciones/funciones.php";
          $stmt = $conn->prepare("INSERT INTO invitados (nombre_invitado, apellido_invitado, descripcion, url_imagen) VALUES(?,?,?,?)");
          $stmt->bind_param("ssss", $nombre , $apellido, $descripcion, $imagen);
          $stmt->execute();
          $id = $stmt->insert_id;
          if ($stmt->affected_rows) {
          if ($id > 0) {
            $respuesta = array(
              'respuesta' => 'exito',
              'id_admin' => $id,
              'imagen_estado' => $imagen_estado
            );
          }else {
            $respuesta = array(
              'respuesta' => 'error',
            );
          }

            }else {
            $respuesta = array(
              'respuesta' => 'error',
            );
          }
          $stmt->close();
          $conn->close();
           } catch (Exception $e) {
             $respuesta = array(
               'respuesta' => "error" . $e->getMessage(),
             );
          }
           die(json_encode($respuesta));
          }


//editar
if(isset($_POST["editar_invitado"])){

  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $descripcion = $_POST["descripcion"];

  $directorio = '../img/invitados/';
if (!is_dir($directorio)) {
mkdir($directorio, 0755, true);
}

if (move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $_FILES['imagen']['name'])) {
         $imagen = $_FILES['imagen']['name'];
          $imagen_estado = 'correcto';
         }else {
$imagen_estado = 'error';
}
            $id = (int)($_POST['editar_invitado']);
                  try {
                     include_once "includes/funciones/funciones.php";

                      if ($_FILES['imagen']['size'] > 0) {
                        $stmt = $conn->prepare("UPDATE invitados SET nombre_invitado = ?, apellido_invitado = ?, descripcion = ?, url_imagen = ? WHERE invitado_id = ?;");
                        $stmt->bind_param('ssssi', $nombre,$apellido, $descripcion, $imagen, $id);
                      }else {
                        $stmt = $conn->prepare("UPDATE invitados SET nombre_invitado = ?, apellido_invitado = ?, descripcion = ? WHERE invitado_id = ?;");
                        $stmt->bind_param('sssi', $nombre,$apellido, $descripcion, $id);
                      }

                  $stmt->execute();
                  if ($stmt->affected_rows > 0) {
                      $respuesta = array(
                        'respuesta' => 'correcto'
                      );
                  }else {
                    $respuesta = array(
                      'respuesta' => 'error'
                    );
                  }
                  $stmt->close();
                  $conn->close();
                  } catch (Exception $e){
                  echo "error" . $e->getMessage();
                }
 die(json_encode($respuesta));
}




//borrar
if(isset($_POST["borrar_invitado"])){
      $id = (int)($_POST["id"]);
      try {
     include_once "includes/funciones/funciones.php";
     $stmt = $conn->prepare("DELETE FROM invitados WHERE invitado_id = ?");
     $stmt->bind_param("i", $id);
     $stmt->execute();
     if ($stmt->affected_rows) {
        $respuesta = array(
          'respuesta' => 'correcto',
        );
       }else {
       $respuesta = array(
         'respuesta' => 'error',
       );
     }
     $stmt->close();
     $conn->close();
      } catch (Exception $e) {
     echo "error" . $e->getMessage();
     }
     die(json_encode($respuesta));
    }








?>
