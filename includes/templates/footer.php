<footer class="site-footer">
  <div class="contenedor">
    <div class="footer-info">
      <h3>sobre <span>gdlwebcamp</span> </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet faucibus dui.
        Praesent metus ipsum, pulvinar vitae condimentum in, scelerisque ut nisl.
         Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>
    <div class="ultimos-tw">
      <h3>ultimos <span>tweets</span> </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet faucibus dui.
        Praesent metus ipsum, pulvinar vitae condimentum in, scelerisque ut nisl.
         Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
       Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>
    <div class="menu">
      <h3>redes <span>sociales</span> </h3>
      <nav class="sociales">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>

  <p class="copir">Todos los derechos reservados GDLWEBCAMP 2016</p>
  <!-- Begin Mailchimp Signup Form -->
  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
  </style>
  <div style="display:none;">
  <div  id="mc_embed_signup" class="b_newsletter">
  <form action="https://gdlwebcamp.us19.list-manage.com/subscribe/post?u=0bb48c05a02643482e1f0e159&amp;id=510407e1a0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
  	<h2>Subscribe</h2>
  <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
  <div class="mc-field-group">
  	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
  </label>
  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
  </div>
  	<div id="mce-responses" class="clear">
  		<div class="response" id="mce-error-response" style="display:none"></div>
  		<div class="response" id="mce-success-response" style="display:none"></div>
  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0bb48c05a02643482e1f0e159_510407e1a0" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
  </form>
  </div>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
</footer>
<!-- Add your site or application content here -->


  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"0bb48c05a02643482e1f0e159","lid":"510407e1a0","uniqueMethods":true}) })</script>
  
<?php
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if ($pagina == "invitados" || "index") {
     echo '<script src="js/jquery.colorbox-min.js"></script>';
   }elseif ($pagina == 'galeria') {
     echo '<script src="js/lightbox.js"></script>';
   }
 ?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
   window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
   ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  </body>

  </html>
