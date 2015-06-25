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
			<div class="content-wrap">
				{{ Theme::place('content') }}	
			</div>
			{{ Theme::partial('footer') }}	
		</div>		
		{{ Theme::partial('defaultjs') }}
		{{-- Theme::asset()->scripts() --}}	
		{{-- Theme::asset()->container('footer')->scripts() --}}	
		{{ Theme::partial('analytic') }}	
	</body>
</html>