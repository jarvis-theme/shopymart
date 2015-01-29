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
{{HTML::script(dirTemaToko().'shopymart/assets/js/jquery.tweet.js')}}
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