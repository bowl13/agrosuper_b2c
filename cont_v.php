<div class="load"></div>
<div id="wrap">
	<?php include('menu.php'); ?>
	<div class="container-fluid" style="padding:0 !important;">
		
	      <div id="video"></div>
			<div id="footnotediv"></div>

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
      // ensure the web page (DOM) has loaded
		document.addEventListener("DOMContentLoaded", function () {
		 
		// Create a popcorn instance by calling the Youtube player plugin
		var example = Popcorn.youtube(
		'#video',
		'http://www.youtube.com/watch?v=XuyMl9I8agM' );
		 
		// add a footnote at 2 seconds, and remove it at 6 seconds
		example.footnote({
		text: "Pop!",
		target: "footnotediv"
		});
		 
		// play the video right away
		example.play();
		 
		}, false);
</script>