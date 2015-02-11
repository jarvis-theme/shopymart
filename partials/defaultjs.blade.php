<!-- Default js -->
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery-1.8.2.min.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/css3-mediaqueries.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/modernizr-1.7.min.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.prettyPhoto.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.tipsy.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.easing.1.3.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/camera.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.jcarousel.min.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery-hover-effect.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.hoverIntent.minified.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.dcmegamenu.1.3.3.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.jqzoom-core.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/organictabs.jquery.js')}}
<!-- {{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.tweet.js')}} -->
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.quovolver.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/productview.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/custom.js')}}
{{HTML::script(dirTemaToko().'shopymart/assets/js/bootstrap.min.js')}}

<!--MENU-->
<script type="text/javascript">
	$(document).ready(function($){
		$('#mega-menu-3').dcMegaMenu({
			rowItems: '2',
			speed: 'fast',
			effect: 'fade'
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.jqzoom').jqzoom({
			zoomType: 'innerzoom',
			preloadImages: false,
			zoomWidth: 300,
			alwaysOn:false
		});
	});
</script>
<script type="text/javascript">
	$(function() {
		$("#tab").organicTabs({
			"speed": 200
		});
	});
</script>
<script type="text/javascript">
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
	jQuery(document).ready(function() {
		jQuery('#mycarousel, #mycarouselnew').jcarousel({
			auto: 0,
			wrap: 'last',
			initCallback: mycarousel_initCallback
		});
	}); 
</script>
<script type="text/javascript">
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>