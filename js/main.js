//variables
  //inputs
const nombre = document.querySelector("#nombre");
const apellido = document.querySelector("#apellido");
const email = document.querySelector("#email");
const paseDia = document.querySelector("#pase-dia");
const paseCompleto = document.querySelector("#pase-completo");
const paseDosDias = document.querySelector("#pase-dosDias");
const camisas = document.querySelector("#camisa-evento");
const etiquetas = document.querySelector("#etiquetas");
const regalo = document.querySelector("#regalo");
  //divs y botones
const viernes = document.querySelector("#viernes");
const sabado = document.querySelector("#sabado");
const domingo = document.querySelector("#domingo");
const error = document.querySelector("#error");
const calcular = document.querySelector("#calcular");
const lisaProductos = document.querySelector("#lisa-productos");
const sumaTotal = document.querySelector("#suma-total");
const pagar = document.querySelector("#btnRegistro");
const mapaa = document.querySelector("#mapa");

//ejecucion
(function(){
  'use strict';
  document.addEventListener("DOMContentLoaded", function(event){

   //mapa
   if (mapaa) {
    var map = L.map('mapa').setView([-34.590894, -58.378977], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-34.590894, -58.378977]).addTo(map)
  .bindPopup('avenida del libertador 336')
  .openPopup();
}
      //funcion boton calcular
      if (calcular) {
        pagar.disabled = true;
        calcular.addEventListener("click", calacularMonto);
      }

      function calacularMonto(event){
        event.preventDefault();
        let valorPase1 = parseInt(Math.max(paseDia.value,0));
        let valorPase2 = parseInt(Math.max(paseDosDias.value,0));
        let valorPaseA = parseInt(Math.max(paseCompleto.value,0));
        let camisasValor = parseInt(Math.max(camisas.value,0));
        let etiquetasValor = parseInt(Math.max(etiquetas.value,0));
        let valorRegalo = regalo.value;
        if (valorRegalo == '') {
          alert("seleccione su regalo");
        }else {
          let total = valorPase1 * 30 + valorPase2 * 45 + valorPaseA * 50; //total pases
          total += camisasValor * 10 * 0.93 + etiquetasValor * 2; // + camisas + etiquetas

          let resumen = [];
          if (valorPase1 >= 1) {
            resumen.push(valorPase1 + " pase/s por un dia");
          }
          if (valorPase2 >= 1) {
            resumen.push(valorPase2 + " pase/s por dos dias");
          }
          if (valorPaseA >= 1) {
            resumen.push(valorPaseA + " pase/s completos");
          }
          if (camisasValor >= 1) {
            resumen.push(camisasValor + " camisa/s");
          }
          if (etiquetasValor >= 1) {
            resumen.push(etiquetasValor + " etiqueta/s");
          }

          lisaProductos.innerHTML = "";
          for (var i = 0; i < resumen.length; i++) {
            lisaProductos.innerHTML += resumen[i] + "<br>";
          }
          sumaTotal.innerHTML = "$"+total.toFixed(2);
          document.getElementById('total_pedido').value = total;
        }

        pagar.disabled = false;

      }

    //funcion ocultar dias
    if (paseDia && paseDosDias && paseCompleto) {
      paseDia.addEventListener("blur",ocultar);
      paseDosDias.addEventListener("blur",ocultar);
      paseCompleto.addEventListener("blur",ocultar);
    }


    function ocultar(event){
      console.log("hola");
      let valorPase1 = parseInt(Math.max(paseDia.value,0));
      let valorPase2 = parseInt(Math.max(paseDosDias.value,0));
      let valorPaseA = parseInt(Math.max(paseCompleto.value,0));
      console.log(valorPaseA);


             if (valorPaseA >= 1) {
                viernes.style.display = "block";
                sabado.style.display = "block";
                domingo.style.display = "block";
                console.log(1);
              }else if (valorPase2 >= 1) {
                viernes.style.display = "block";
                sabado.style.display = "block";
                domingo.style.display = "none";
                console.log(2);
              }else if (valorPase1 >= 1) {
                viernes.style.display = "block";
                sabado.style.display = "none";
                domingo.style.display = "none";
                console.log(3);
              }else {
                viernes.style.display = "none";
                sabado.style.display = "none";
                domingo.style.display = "none";
                console.log(4);
              }
    }




  });
})();


$(function(){

  $('body.calendario .navegacion-principal a:contains("calendario")').addClass('activo');
  $('body.galeria .navegacion-principal a:contains("conferencia")').addClass('activo');
  $('body.invitados .navegacion-principal a:contains("invitados")').addClass('activo');

  $('div .ocultar').hide();
  $('#talleres').show();
  $(".menu-programa a:first").addClass("activo");

  $(".menu-programa a").on("click",function(){
    $(".menu-programa a").removeClass("activo");
    $(this).addClass("activo");
    var enlace = $(this).attr("href");
    $('div .ocultar').hide();
    $(enlace).fadeIn(1000);
    return false;
  });

  $("#n1").animateNumber({number:6} , {duration:3000});
  $("#n2").animateNumber({number:15} , {duration:3000});
  $("#n3").animateNumber({number:3} , {duration:3000});
  $("#n4").animateNumber({number:9} , {duration:3000});

  $(".cuenta-regresiva ul").countdown('2020/4/15', function(event){
    $("#dias").html(event.strftime('%D'));
    $("#horas").html(event.strftime('%H'));
    $("#minutos").html(event.strftime('%M'));
    $("#segundos").html(event.strftime('%S'));
  });


  var windowHeight = $(window).height();
  var barraAltura = $(".barra").innerHeight();
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > (windowHeight)) {
      $('.barra').addClass('fixed');
      $('body').css({'margin-top': barraAltura +'px'});
    }else {
      $('.barra').removeClass('fixed');
      $('body').css({'margin-top':'0px'});
    }
  });

  $(".menu-movil").on("click",function(){
    $(".navegacion-principal").slideToggle();
  });
 if ($('.invitado_info')) {
   $('.invitado_info').colorbox({inline:true, width:"50%"});
 }

 //if ($(".b_newsletter")) {
    $(".b_newsletter").colorbox({inline:true, width:"50%"});
//}


});


//colorbox
