<!DOCTYPE html>
<html lang="en">
	<head>
		{{ Theme::partial('seostuff') }}	
		{{ Theme::partial('defaultcss') }}	
		{{ Theme::asset()->styles() }}	
	</head>
	<body>
		<div id="page_wrap">
			{{ Theme::partial('header') }}	
			{{ Theme::partial('slider') }}	
			<div class="content-wrap">
				{{ Theme::place('content') }}	
			</div>
			{{ Theme::partial('footer') }}	
		</div>  
		{{-- Theme::asset()->scripts() --}}	
		{{ Theme::partial('defaultjs') }}	
		{{-- Theme::asset()->container('footer')->scripts() --}}	
		{{ Theme::partial('analytic') }}	
	</body>
</html>