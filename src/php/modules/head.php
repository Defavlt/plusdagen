<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link href="css/font.css" rel="stylesheet" type="text/css"/>
<link href="css/slider.css" rel="stylesheet" type="text/css"/>
<link href="css/meny.css" rel="stylesheet" type="text/css"/>
<link href="css/footer.css" rel="stylesheet" type="text/css"/>
<link href="css/pos_struktur.css" rel="stylesheet" type="text/css"/>

<title>Arbetsmarknadsdagen</title>


    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 

    <!-- load jQuery and the plugin -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
      
</head>
<body>
	<div id="container_main">