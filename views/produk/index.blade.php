	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			<div class="ctrl">
				<form class="left">
					Show:&nbsp;
					<select id="show" data-rel="{{URL::current()}}">
					  <option value="12" {{Input::get('show')==12?'selected="selected"':''}}>12</option>
					  <option value="25" {{Input::get('show')==25?'selected="selected"':''}}>25</option>
					</select>
				</form>
				<span class="list-style-buttons">
					<a href="#" id="gridview" class="switcher "><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/grid-view-active.png')}}" alt="Grid"></a>
					<a href="#" id="listview" class="switcher "><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/list-view-active.png')}}" alt="List"></a>
				</span>
			</div>
			<ul id="products" class="list clearfix">
				@foreach(list_product(Input::get('show'), @$category) as $myproduk)
				<li class="da-thumbs">
					<div class="product-thumb-hover">
						<section class="left">
							<a href="{{product_url($myproduk)}}">
								{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class'=>"img1", "style"=>"width:100%;"))}}
							</a>
							@if(is_terlaris($myproduk))
								<p class="sale">HOT</p>
							@else
								@if(is_produkbaru($myproduk))
									<p class="new">NEW</p>
								@elseif(is_outstok($myproduk))
									<p class="out">Out Stock</p>
								@endif
							@endif
							
							<article class="da-animate da-slideFromRight" style="display: block;">
								<h3>{{$myproduk->nama}}</h3>
								<p>
									<a href="{{product_url($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
									<a href="{{URL::to(product_image_url($myproduk->gambar1,'large'))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
								</p>
							</article>
						</section>
					</div>
					<section class="center">
						<h3>{{shortName($myproduk->nama,25)}}</h3>
						<!--<em>Category: <a href="#">Men's Dress</a></em>-->
					</section>
					<section class="right">
						<span class="price"><small>{{price($myproduk->hargaCoret, false)}}</small>&nbsp;&nbsp; {{price($myproduk->hargaJual)}}</span>
						<ul class="menu-button">
							<li><a href="{{URL::to(product_image_url($myproduk->gambar1,'large'))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
							<li><a href="{{product_url($myproduk)}}" class="link tip" title="View Detail"></a></li>
						</ul>
					</section>
				</li>
				@endforeach
			</ul><!--end:products-->
			{{list_product(Input::get('show'), @$category)->links()}}
		</section>
		<aside class="sidebar">
			<div class="side">
				<h4>Category</h4>
				<ul class="cat">
				{{generateKategori($kategori,'<li>;</li>','',';',true)}}
				</ul>
			</div><!--end:side-->
			@if(count(best_seller()) > 0)
			<div class="side">
				<h4>Bestsellers</h4>
				@foreach (best_seller() as $item)
				<div class="entry">
					<div class="da-thumbs">
						<div>
							{{HTML::image(product_image_url($item->gambar1,'thumb'))}}
							<article class="da-animate da-slideFromRight" style="display: block;">
								<p><a href="{{product_url($item)}}" class="link"></a></p>
							</article>
						</div>
					</div>
					<h3><a href="{{product_url($item)}}">{{$item->nama}}</a></h3>
					<small>{{price($item->hargaJual)}}</small>
				</div>
				@endforeach
			</div><!--end:side-->
			@endif
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