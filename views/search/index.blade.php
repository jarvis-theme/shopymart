<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			<div class="ctrl">
			</div>
			<ul id="products" class="list clearfix">
				@if($jumlahCari!=0)
					@foreach($hasilpro as $myproduk)
					<li class="da-thumbs">
						<div class="product-thumb-hover">
							<section class="left">
								{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array("class"=>"img1"))}}
								<!-- <p class="sale">Sale</p> -->
								<article class="da-animate da-slideFromRight" style="display: block;">
									<h3>{{$myproduk->nama}}</h3>
									<p>
										<a href="{{product_url($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
										<a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
										<a href="{{URL::to(product_image_url($myproduk->gambar1,'large'))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
									</p>
								</article>
							</section>
						</div>
						<section class="center">
							<h3>{{$myproduk->nama}}</h3>
							<!-- <em>Category: <a href="#">Men's Dress</a></em> -->
						</section>
						<section class="right">
							<span class="price"><small>{{price($myproduk->hargaCoret, false)}}</small>&nbsp;&nbsp; {{price($myproduk->hargaJual)}}</span>
							<ul class="menu-button">
								<li><a href="{{URL::to(product_image_url($myproduk->gambar1, 'large'))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
								<li><a href="{{product_url($myproduk)}}" class="link tip" title="View Detail"></a></li>
							</ul>
						</section>
					</li>
				@endforeach 
			@else   
				<li>Hasil tidak ditemukan</li>
			@endif  
			</ul><!--end:products-->
			<ul id="pagination">
				{{--$produk->links()--}}
			</ul>
		</section>
		<aside class="sidebar">
			<div class="side">
				<h4>Banner</h4>
				@foreach(vertical_banner() as $item) 
				<div>
					<a href="{{URL::to($item->url)}}">
						<img src="{{URL::to(banner_image_url($item->gambar))}}" />
					</a>
				</div>
				@endforeach 
			</div><!--end:side-->
		</aside>
	</div><!--end:container-2-->