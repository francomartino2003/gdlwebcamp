$(document).ready(function(){

//crear nuevo Administrador
  if ($("#crear_admin")) {
  $("#crear_admin").on('submit', function(e){
    e.preventDefault();
    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        if (data.respuesta == 'exito') {
          Swal.fire(
            'Bien hecho!',
            'Administrador agregado con exito!',
            'succes'
          )
        }else{
          Swal.fire(
            'elije!',
            'otro nombre!',
            'error'
          )
        }
      },
      error: function(data){
        console.log("error");
        Swal.fire(
          'error!',
          'hubo un error',
          'error'
        )
      }
    });
  });
}

//inicio de sesion Administrador
if ($("#login_admin")) {
  $("#login_admin").on('submit', function(e){
    e.preventDefault();
    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        if (data.respuesta == 'correcto') {
          Swal.fire(
            'login correcto!',
            'ha inicado sesion correctamente',
            'success'
          ).then((result) => {
               window.location.href = "admin-area.php";
            })

        }else if (data.respuesta == 'error') {
          Swal.fire(
            'error!',
            'hubo un error',
            'error'
          )
        }else{
          Swal.fire(
            'error!',
            'ususario o password incorecto',
            'error'
          )
        }
      },
      error: function(data){
        console.log("error");
        Swal.fire(
          'error!',
          'hubo un error',
          'error'
        )
      }
    });
  });
}


//actualizar Administrador
if ($("#editar_admin")) {
  $("#editar_admin").on('submit', function(e){
    e.preventDefault();
    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        if (data.respuesta == 'correcto') {
          Swal.fire(
            'bien hecho!',
            'se ha editado el administrador correctamente',
            'success'
          ).then((result) => {
               window.location.href = "lista-admin.php";
            })

        }else{
          Swal.fire(
            'error!',
            'no se has cambiado campos',
            'error'
          ).then((result) => {
               window.location.href = "lista-admin.php";
            })
        }
      },
      error: function(data){
        console.log("error");
        Swal.fire(
          'error!',
          'hubo un error',
          'error'
        )
      }
    });
  });
}


//borrar Administrador
if ($(".borrar-registro")) {
  $(".borrar-registro").on('click', function(e){
    e.preventDefault();

    Swal.fire({
  title: 'Estas seguro?',
  text: "esat accion no se puede revertir!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, borrar!'
}).then((result) => {
  if (result.value) {

    var id = $(this).attr("data-id");
    var borrar = 1;
    var datos = {
      "id": id,
       "borrar": borrar
    };

    $.ajax({
      type: "post",
      data: datos,
      url: "insertar_admin.php",
      dataType: 'json',
      success: function(data){
           if (data.respuesta == "correcto") {
             Swal.fire(
               'borradp!',
               'administrador borrado correctamente',
               'success'
             ).then((result) => {
                  window.location.href = "lista-admin.php";
               })
           }else {
             Swal.fire(
               'error!',
               'hubo un error',
               'error'
             )
           }
      },
      error: function(data){
        console.log("error");
        Swal.fire(
          'error!',
          'hubo un error',
          'error'
        )
      }
    });


  }
})
  });
}




});
