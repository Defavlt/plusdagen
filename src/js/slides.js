$(function() {

	$('#slides').slides({
		preload : true,
		preloadImage : 'img/loading.gif',
		play : 5000,
		pause : 2500,
		hoverPause : true,
		animationStart : function(current) {
			$('.caption').animate({
				bottom : -35
			}, 100);
			if (window.console && console.log) {

				console.log('animationStart on slide: ', current);
			};
		},
		animationComplete : function(current) {
			$('.caption').animate({
				bottom : 0
			}, 200);
			if (window.console && console.log) {

				console.log('animationComplete on slide: ', current);
			};
		},
		slidesLoaded : function() {
			$('.caption').animate({
				bottom : 0
			}, 200);
		}
		
		
	});
});

