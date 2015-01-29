<!-- Default css-->
@if($tema->isiCss=='')
	{{HTML::style(dirTemaToko().'shopymart/assets/css/style.css')}}
@else
	{{HTML::style(dirTemaToko().'shopymart/assets/css/editstyle.css')}}
@endif
{{HTML::style(dirTemaToko().'shopymart/assets/css/prettyPhoto.css')}}
{{HTML::style(dirTemaToko().'shopymart/assets/css/tipsy.css')}}
{{HTML::style(dirTemaToko().'shopymart/assets/css/camera.css')}}
{{HTML::style(dirTemaToko().'shopymart/assets/css/jcarousel.css')}}
{{HTML::style(dirTemaToko().'shopymart/assets/css/jquery.jqzoom.css')}}

<link rel="shortcut icon" href="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>