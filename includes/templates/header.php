<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/731648975a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">

  <?php
     $archivo = basename($_SERVER['PHP_SELF']);
     $pagina = str_replace(".php", "", $archivo);
     if ($pagina == "invitados" || "index") {
       echo '<link rel="stylesheet" href="css/colorbox.css">';
     }elseif ($pagina == 'galeria') {
       echo '<link rel="stylesheet" href="css/lightbox.css">';
     }
   ?>

  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina ?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


   <header class="hero">
     <div class="contenido-header contenedor">
         <nav class="sociales">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-pinterest"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
         </nav>
         <div class="info-evento">
           <div class="fecha-ciudad">
             <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
             <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Buenos Aires</p>
           </div>
           <h1 class="nombre">DGL web Camp</h1>
           <p class="slogan">la mejor conferencia de <span>disenio web</span> </p>
         </div>
     </div>
   </header>

   <div class="barra">
     <div class="contenedor clearfix align">
       <a href="index.php">
          <img class="logo" src="img/logo.svg" alt="imagen logo">
       </a>
       <div class="menu-movil"><i class="fas fa-bars"></i>
       </div>
       <nav class="navegacion-principal">
         <a href="galeria.php">conferencia</a>
         <a href="calendario.php">calendario</a>
         <a href="invitados.php">invitados</a>
         <a href="registro.php">reservaciones</a>
       </nav>
     </div>
   </div>
