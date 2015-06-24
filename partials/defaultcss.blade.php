<!-- Default css-->
@if($tema->isiCss=='')
	{{generate_theme_css('shopymart/assets/css/style.css')}}
@else
	{{generate_theme_css('shopymart/assets/css/editstyle.css')}}
@endif
{{generate_theme_css('shopymart/assets/css/prettyPhoto.css')}}
{{generate_theme_css('shopymart/assets/css/tipsy.css')}}
{{generate_theme_css('shopymart/assets/css/camera.css')}}
{{generate_theme_css('shopymart/assets/css/jcarousel.css')}}
{{generate_theme_css('shopymart/assets/css/jquery.jqzoom.css')}}
{{favicon()}}

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>