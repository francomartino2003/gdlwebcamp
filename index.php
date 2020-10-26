<?php include_once 'includes/templates/header.php'; ?>

   <section class="contenedor seccion seccion-uno">
     <h2>la mejor conferrencia de disenio web en espaniol</h2>
     <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Morbi congue purus ut enim scelerisque sollicitudin.
        Cras eu erat dictum quam sagittis malesuada quis sed nunc. Nunc eget lacinia velit.</p>
   </section>

   <section class="seccion-programa">
     <div class="contenedor-video">
       <video autoplay muted loop poster="img/bg-talleres.jpg">
         <source src="video/video.mp4" type="video/mp4">
         <source src="video/video.webm" type="video/webm">
         <source src="video/video.ogv" type="video/ogv">
       </video>
     </div>
     <div class="contenido-programa contenedor seccion">
       <div class="programa-evento">
         <h2>programa del evento</h2>
         <nav class="menu-programa">
           <a href="#talleres"><i class="fas fa-code"></i>talleres</a>
           <a href="#conferencias"><i class="fas fa-comment"></i>conferencias</a>
           <a href="#seminarios"><i class="fas fa-university"></i>seminarios</a>
         </nav>

         <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS y JavaScript</h3>
              <p><i class="fa fa-clock-o"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de diciembre</p>
              <p><i class="fa fa-user"></i>franco martino O</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive web design</h3>
              <p><i class="fa fa-clock-o"></i>20:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de diciembre</p>
              <p><i class="fa fa-user"></i>franco martino O</p>
            </div>
            <a href="calendario.php" class="button float-right">ver todos</a>
         </div> <!--talleres-->
         <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fa fa-clock-o"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de diciembre</p>
              <p><i class="fa fa-user"></i>franco martino O</p>
            </div>
            <div class="detalle-evento">
              <h3>no se que hacer</h3>
              <p><i class="fa fa-clock-o"></i>20:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de diciembre</p>
              <p><i class="fa fa-user"></i>franco martino O</p>
            </div>
            <a href="calendario.php" class="button float-right">ver todos</a>
         </div> <!--conferencias-->
         <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>seminario1</h3>
              <p><i class="fa fa-clock-o"></i>16:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de diciembre</p>
              <p><i class="fa fa-user"></i>franco martino O</p>
            </div>
            <div class="detalle-evento">
              <h3>seminario2</h3>
              <p><i class="fa fa-clock-o"></i>20:00 hrs</p>
              <p><i class="fa fa-calendar"></i>10 de diciembre</p>
              <p><i class="fa fa-user"></i>franco martino O</p>
            </div>
            <a href="calendario.php" class="button float-right">ver todos</a>
         </div> <!--seminarios-->
       </div>
     </div>
   </section>

    <?php include_once 'includes/templates/invita2.php'; ?>

   <div class="contador parallax">
     <div class="contenedor">
       <ul class="resumen-evento">
         <li> <p class="numero" id="n1"></p>invitados</li>
         <li> <p class="numero" id="n2"></p>talleres</li>
         <li> <p class="numero" id="n3"></p>dias</li>
         <li> <p class="numero" id="n4"></p>conferencias</li>
       </ul>
     </div>
   </div>

   <section class="precios seccion">
     <h2>precios</h2>
     <div class="contenedor">
       <ul class="lista-precios">
         <li>
             <div class="tabla-precio">
               <h3>pase por dia</h3>
               <p class="numero">$30</p>
               <ul>
                 <li>bocadillos gratis</li>
                 <li>tadas las conferencias</li>
                 <li>todos los talleres</li>
               </ul>
               <a href="#" class="button hollow">comprar</a>
             </div>
         </li>
         <li>
             <div class="tabla-precio">
               <h3>todos los dias</h3>
               <p class="numero">$50</p>
               <ul>
                 <li>bocadillos gratis</li>
                 <li>tadas las conferencias</li>
                 <li>todos los talleres</li>
               </ul>
               <a href="#" class="button">comprar</a>
             </div>
         </li>
         <li>
             <div class="tabla-precio">
               <h3>pase por 2 dias</h3>
               <p class="numero">$45</p>
               <ul>
                 <li>bocadillos gratis</li>
                 <li>tadas las conferencias</li>
                 <li>todos los talleres</li>
               </ul>
               <a href="#" class="button hollow">comprar</a>
             </div>
         </li>
       </ul>
     </div>
   </section>

   <div id="mapa" class="mapa"></div>

   <section class="seccion">
     <h2>testimoniales</h2>
     <div class="testimonial contenedor">
       <blockquote>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent metus ipsum, pulvinar vitae condimentum in, scelerisque ut nisl.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
         <footer class="info-testimonial">
           <img src="img/testimonial.jpg" alt="img testimonial">
           <cite>osvaldo aponte escpvedo <span>diseniador en @prisma</span> </cite>
         </footer>
       </blockquote> <!--testimonial-->
       <blockquote>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent metus ipsum, pulvinar vitae condimentum in, scelerisque ut nisl.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
         <footer class="info-testimonial">
           <img src="img/testimonial.jpg" alt="img testimonial">
           <cite>osvaldo aponte escpvedo <span>diseniador en @prisma</span> </cite>
         </footer>
       </blockquote> <!--testimonial-->
       <blockquote>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent metus ipsum, pulvinar vitae condimentum in, scelerisque ut nisl.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
         <footer class="info-testimonial">
           <img src="img/testimonial.jpg" alt="img testimonial">
           <cite>osvaldo aponte escpvedo <span>diseniador en @prisma</span> </cite>
         </footer>
       </blockquote> <!--testimonial-->
     </div>
   </section>

   <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>registrate al newsletter</p>
        <h3>dglWebCamp</h3>
        <a href="#mc_embed_signup" class="b_newsletter button transparent">registro</a>
      </div>
   </div>

   <section class="seccion">
     <h2>faltan</h2>
     <div class="cuenta-regresiva contenedor">
       <ul>
         <li><p class="numero" id="dias"></p>dias</li>
         <li><p class="numero" id="horas"></p>horas</li>
         <li><p class="numero" id="minutos"></p>minutos</li>
         <li><p class="numero" id="segundos"></p>segundos</li>
       </ul>
     </div>
   </section>


  <?php include_once 'includes/templates/footer.php'; ?>
