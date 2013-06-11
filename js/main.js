/*loading*/
$(window).load(function(){
	$('.load').delay(1000).fadeOut();
	$('#wrap, footer').fadeIn(200);

		var $load = $('footer').load(function(){});
		if($load)
		{
			$('#cont_video').delay(1000).show();
		}else{
			$('#cont_video').hide();
		}
});
$(document).ready(function(){

	/*bg video*/
	var $play = $('.tubular-play').click(function(){$('.tubular-play').fadeOut(1000);$('.tubular-pause').show();});
	var $playp = $('.tubular-pause').click(function(){$('.tubular-play').show();$('.tubular-pause').hide();});

	if ($play){
		$('.tubular-pause').hide();
		$('.tubular-play').show();
	}else if($playp){
		$('.tubular-pause').hide();
		$('.tubular-play').show();
	}else{
		$('.tubular-play').show();
		$('.tubular-pause').show();
	};
	$('#cont_video').tubular({
		videoId: '6v2L2UGZJAM',
		playButtonClass: 'tubular-play',
		pauseButtonClass: 'tubular-pause'
	});
	
	/*scrolling*/
	$window = $(window);
                
    $('section[data-type="background"]').each(function(){
     var $bgobj = $(this);  
      	$(window).scroll(function() {						
			var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
			var coords = '80% '+ yPos + 'px';
			$bgobj.css({ backgroundPosition: coords });
		});
	});

	/*cont_qsomos*/
	/*var animationStarted = false;

	$(window).scroll(function(){

		if($(window).scrollTop() > 300 && !animationStarted){
             $("#home article").animate({ "left": "+=400px" }, 500);
            animationStarted  = true;
        };
        if($(window).scrollTop() < 300 && animationStarted){
             $("#home article").animate({ "left": "-=400px" }, 500);
            animationStarted  = false;
        };

        if($(window).scrollTop() > 1000 && !animationStarted){
             $("#about article").animate({ "right": "+=400px" }, 500);
            animationStarted  = true;
        };
        if($(window).scrollTop() < 1000 && animationStarted){
             $("#about article").animate({ "right": "-=400px" }, 500);
            animationStarted  = false;
        };
		
		if ($(this).scrollTop()>300){

			$('#home article').animate({
				left:'400px'
			});
		}else{

			$('#home article').animate({
				left:'-400px'
			});
		};
	});
*/
	/*$(window).bind('scroll',function(e){
    parallaxScroll();
	});
 	
	function parallaxScroll(){
    var $scrolled = $(window).scrollTop() > 500;
    var $scrolled2 = $(window).scrollTop() > 1500;

    if ($scrolled) {
    	$('#about article').animate({
			right:+(($scrolled*0.7))+'%'
		}, 500);
    }else if($scrolled2 > 1000) {
    	$('#about article').animate({
			left: '-'+(($scrolled*0.7))+'%'
		}, 500);
    };
    if ($scrolled2) {
    	$('#nada article').animate({
			left:'100px'
		}, 500);
    };
		$('#home article').animate({
			left:'-'+(($scrolled*0.7))+'%'
		}, 50);
	}*/
});
document.createElement("article");
document.createElement("section");