<div class="content-wrap">
	<div id="featured">
		<div class="camera_wrap camera_emboss" id="camera_wrap_1">
			@foreach(slideshow() as $key => $slides)
			<div data-src="{{slide_image_url($slides->gambar)}}">
				<img style="max-height: 435px;" src="{{slide_image_url($slides->gambar)}}" alt="{{$slides->title}}" />
				<div class="camera_caption moveFromLeft">
					@if(!empty($slides->title))
					<h2>{{$slides->title}}</h2>
					@endif
					@if(!empty($slides->text))
					<p>{{$slides->text}}</p>
					@endif
					<div class="button">
                    	@if(!empty($slides->url))
                    	<a href="{{filter_link_url($slides->url)}}">View</a>
                    	@else
						<a href="#">View</a>
						@endif
					</div>
				</div>
			</div>
			@endforeach
			<!-- <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="{{URL::to(getPrefixDomain().'/galeri/slide-snackies.jpg')}}">
				<div class="camera_caption moveFromLeft">
					<h2>You can Order Through You Mobile Phone</h2>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<div class="button">
					  <a href="cart.html">View Cart</a>
					  <a href="checkout.html">Checkout</a>
					</div>
				</div>
			</div>
			<div data-thumb="images/slides/thumbs/road.jpg" data-src="{{URL::to(getPrefixDomain().'/galeri/slide-snackies.jpg')}}">
				<div class="camera_caption moveFromLeft">
					<h2>Compatible in any Browsers</h2>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<div class="button">
					  <a href="cart.html">View Cart</a>
					  <a href="checkout.html">Checkout</a>
					</div>
				</div>
			</div> -->
		</div><!-- #camera_wrap_1 -->
		<div style="clear:both; display:block; height:40px"></div>
	</div><!--end:featured-->