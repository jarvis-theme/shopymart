define(['jquery','jcarousel','camera','hover','prettyPhoto','tipsy'], function($,carousel)
{
	return new function(){
		var self = this;
		self.run = function(){
			//------JCAROUSEL-------------
			function mycarousel_initCallback(carousel){
				// Disable autoscrolling if the user clicks the prev or next button.
				carousel.buttonNext.bind('click', function() {
					carousel.startAuto(0);
				});
				carousel.buttonPrev.bind('click', function() {
					carousel.startAuto(0);
				});
				// Pause autoscrolling if the user moves with the cursor over the clip.
				carousel.clip.hover(function() {
					carousel.stopAuto();
				}, function() {
					carousel.startAuto();
				});
			};

			$(document).ready(function() {
				$('#mycarousel, #mycarouselnew').jcarousel({
					auto: 0,
					wrap: 'last',
					initCallback: mycarousel_initCallback
				});

				// hover produk
				$('ul.da-thumbs > li, div.da-thumbs div, li.da-thumbs div').hoverdir();
			});
			
			//------CAMERA SLIDER-------------
			$('#camera_wrap_1').camera({
				thumbnails: false,
				height: '46%',
				pagination: false,
				loaderColor: '#f5640c',
				loaderOpacity: .8,
				loader: 'bar'
			});

			//------TIPSY TOOLTIP-------------
			$('a.tip').tipsy({fade: true, gravity: 's'});

			$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		};
	}
});