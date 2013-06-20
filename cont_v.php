<div class="load"></div>
<div id="wrap">
	<?php include('menu.php'); ?>
	<div class="container-fluid" style="padding:0 !important;">
		
			<div id="player_1" class="video_holder">
				<p>To see this video, please enable JavaScript<span class="old_browsers"> or upgrade to the latest HTML5 compatible browser</span>.</p>
			</div>
	
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
    jwplayer('player_1').setup({
			file: "http://content.bitsontherun.com/videos/lWMJeVvV-364767.mp4",
			width: "876",
			height: "470",
			image: "/content/images/jw-player/lWMJeVvV-876.jpg",
                        logo: {
                               file: "http://p.jwpcdn.com/6/0/logo.png",
                               link: "http://www.longtailvideo.com/jwpabout/?a=l&v=" + jwplayer.version + "&m=f&e=a"
                        },
                        abouttext: "JW Player " + jwplayer.version, 
                        aboutlink: "http://www.longtailvideo.com/jwpabout/?a=r&v=" + jwplayer.version + "&m=f&e=a",
                        sharing: {
                              code: encodeURI("<iframe src='http://content.bitsontherun.com/videos/lWMJeVvV-364767.mp4' />"),
                              link: "http://www.longtailvideo.com/jw-player/"
                       }
		});
</script>