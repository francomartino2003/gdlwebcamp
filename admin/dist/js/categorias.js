$(document).ready(function(){

//crear evento
  if ($("#crear_categoria")) {
  $("#crear_categoria").on('submit', function(e){
    e.preventDefault();
    var datos = $(this).serializeArray();

    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        console.log(data);
        if (data.respuesta == 'exito') {

          Swal.fire(
            'Bien hecho!',
            'id ='+ data.id_admin,
            'success'
          )
        }else{
          Swal.fire(
            'eroor!',
            'debes completar tods los datos!',
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

//actualizar categoria
if ($("#editar_categoria")) {
  $("#editar_categoria").on('submit', function(e){
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
            'se ha editado la categoria correctamente',
            'success'
          ).then((result) => {
               window.location.href = "lista-categorias.php";
            })

        }else{
          Swal.fire(
            'error!',
            'no se han cambiado campos',
            'error'
          ).then((result) => {
               window.location.href = "lista-categorias.php";
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


//borrar categoria
if ($(".borrar-registro-cat")) {
  $(".borrar-registro-cat").on('click', function(e){
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
       "borrar_categoria": borrar
    };
    console.log(datos);

    $.ajax({
      type: "post",
      data: datos,
      url: "insertar_admin.php",
      dataType: 'json',
      success: function(data){
        console.log(data);
           if (data.respuesta == "correcto") {
             Swal.fire(
               'borrado!',
               'categoria borrada correctamente',
               'success'
             ).then((result) => {
                  window.location.href = "lista-categorias.php";
               })
           }else {
             Swal.fire(
               'error!',
               'hubo un errooooor',
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
