<div class="load"></div>
<div id="wrap">
	<?php include('menu.php'); ?>
	<div class="container-fluid" style="padding:0 !important;">
		
	     <video id="video" poster="http://clientes.octano.cl/b2c/img/video.jpg" controls>
	          <source src="img/agro_video.mp4" type="video/mp4" /> <!-- MPEG4 for Safari -->
	          <source src="http://henriksjokvist.net/examples/html5-video/video.ogg" type="video/ogg" /> <!-- Ogg Theora for Firefox 3.5+ -->
	     </video>

	</div>
	<div id="push"></div>
</div>
<footer class="footer-fix container-fluid text-center">
	<div class="row-fluid">
		<div class="span12">&copy; 2013 Agrosuper. All rights reserved. | Camino la Estrella Nº 401, of. 7, Sector Punta de Cortes, | Rancagua. Región del Libertador General Bernardo O'Higgins, Chile.</div>
	</div>
</footer>
<?php include('script.php'); ?>
<script type='text/javascript'>
     $(document).ready(function() {
            var v = document.createElement("video"); // Are we dealing with a browser that supports <video>? 
            if ( !v.play ) { // If no, use Flash.
              var params = {
                allowfullscreen: "true",
                allowscriptaccess: "always"
              };
              var flashvars = {
                file: "img/agro_video.mp4",
                image: "http://clientes.octano.cl/b2c/img/video.jpg"
              };
              swfobject.embedSWF("player.swf", "demo-video-flash", "480", "272", "9.0.0", "expressInstall.swf", flashvars, params);
            }
          });
</script>