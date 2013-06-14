<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Agrosuper B2C</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main2.css">

    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main-resp.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>
    <body style="overflow:hidden;">

        <div class="load"></div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrap">

            <div class="contaier-fluid cont-qsomos hidden-phone hidden-tablet" style="overflow:hidden;">

                <?php include("menu.php"); ?>

                <section id="first" data-speed="15" data-type="background">


                    <article class="contenido text-right" id="cont_scroll1">
                        <h1>somos una marca</h1>
                        <h2>chilena de proteína</h2>
                        <p>presente en más de</p>

                        <h3>65 países.</h3>
                    </article>


                </section>
                <!-- Section #2 -->
                <section id="middle1" data-speed="9" data-type="background">


                    <article class="contenido text-left" id="cont_scroll2" style="right:-100px;">

                        <h1></h1>
                        <p>con alimentos de primera</p>
                        <p>calidad que cumplen </p>

                        <h3>estándares <br>internacionales.</h3>

                    </article>


                </section>

                <section id="middle2" data-speed="20" data-type="background">


                    <article class="contenido text-right" id="cont_scroll3">

                        <h1></h1>
                        <p>nos enfocamos en personas</p>
                        <p>para las cuales</p>

                        <h3>comer es más <br>que alimentarse.</h3>

                    </article>


                </section>

                <section id="last" data-speed="20" data-type="background">


                    <article class="contenido text-left" id="cont_scroll4">

                        <h1></h1>
                        <p>personas que saborean cada</p>

                        <h3>aspecto de su vida.</h3>

                    </article>


                </section>
            </div>

            <div class="contaier-fluid cont-qsomos visible-phone vidible-tablet">

              <?php include("menu.php"); ?>

            <!-- Section #1 -->
            <section id="first" data-speed="15" data-type="background">


                <article class="contenido  text-right">
                    <h1>somos una marca</h1>
                    <h2>chilena de proteína</h2>
                    <p>presente en más de</p>

                    <h3>65 países.</h3>
                </article>


            </section>
            <!-- Section #2 -->
            <section id="middle1" data-speed="9" data-type="background">


                <article class="contenido text-left">

                    <h1></h1>
                    <p>con alimentos de primera</p>
                    <p>calidad que cumplen </p>

                    <h3>estándares internacionales.</h3>

                </article>


            </section>

            <section id="middle2" data-speed="20" data-type="background">


                <article class="contenido text-right">

                    <h1></h1>
                    <p>nos enfocamos en personas</p>
                    <p>para las cuales</p>

                    <h3>comer es más <br>que alimentarse.</h3>

                </article>


            </section>

            <section id="last" data-speed="20" data-type="background">


                <article class="contenido text-left">

                    <h1></h1>
                    <p>personas que saborean cada</p>

                    <h3>aspecto de su vida.</h3>

                </article>


            </section>


        </div>


        <footer class="footer-fix container-fluid text-center">
        
            <div class="row-fluid">

                <div class="span12">&copy; 2013 Agrosuper. All rights reserved. | Camino la Estrella Nº 401, of. 7, Sector Punta de Cortes, | Rancagua. Región del Libertador General Bernardo O'Higgins, Chile.</div>

            </div>
                
        </footer>
        </div>

        <script src="http://www.instantshift.com/demo/scrollorama-scroll/js/jquery-1.7.1.min.js"></script>

        <script src="js/vendor/jquery.superscrollorama.js"></script>

        <script src="js/vendor/jquery.jpanelmenu.min.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>
        
         <!--script-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=178779322280867";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script>
        /*loading*/
        $(window).load(function(){
            $('.load').delay(1000).fadeOut();
            $('#wrap, footer').fadeIn(200);

                var load = $('footer').load(function(){});
                if(load)
                {
                    $('#cont_video').delay(1000).show();
                }else{
                    $('#cont_video').hide();
                }
        });
        $(document).ready(function(){

            $(document).on("ready", gogogo);
                    function gogogo(){

                        var scrollorama = $.scrollorama({ blocks:'#wrap' });   

                        scrollorama.animate('#cont_scroll1',{ duration: 600, property:'left', start:0, end:-1000});
                        scrollorama.animate('#cont_scroll2',{ duration: 1200, property:'right', start:-1300});
                        scrollorama.animate('#cont_scroll3',{ duration: 3000, property:'left', start:-900, end:600});
                        scrollorama.animate('#cont_scroll4',{ duration: 3000, property:'right', start:-1000});
                      
                    }
            $window = $(window);
                
            $('section[data-type="background"]').each(function(){
             var $bgobj = $(this);  
                $(window).scroll(function() {                       
                    var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
                    var coords = '80% '+ yPos + 'px';
                    $bgobj.css({ backgroundPosition: coords });
                });
            });

            var jPanelMenu = {};
            jPanelMenu = $.jPanelMenu({

                menu: '.main nav',
                animated: true,
                direction: 'right'
                
            });
            jPanelMenu.on();
        });
        </script>
    </body>
</html>