<div class="content-wrap">
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
				@foreach($produk as $myproduk)
					<li class="da-thumbs">
					<div class="product-thumb-hover">
						<section class="left">
							<a href="{{slugProduk($myproduk)}}">{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class="img1" style="width:100%;"'))}}</a>
							@if(is_terlaris($myproduk))
								<p class="sale">HOT</p>
							@endif
							@if(is_produkbaru($myproduk))
								<p class="new">NEW</p>
							@endif
							@if(is_outstok($myproduk))
								<p class="out">Out Stock</p>
							@endif
							
							<article class="da-animate da-slideFromRight" style="display: block;">
								<h3>{{$myproduk->nama}}</h3>
								<p>
								<a href="{{slugProduk($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
								<a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
							</article>
						</section>
					</div>
					<section class="center">
						<h3>{{shortName($myproduk->nama,25)}}</h3>
						<!--<em>Category: <a href="#">Men's Dress</a></em>-->
					</section>
					<section class="right">
						<span class="price"><small>{{jadiRupiah($myproduk->hargaCoret, false)}}</small>&nbsp;&nbsp; {{jadiRupiah($myproduk->hargaJual)}}</span>
						<ul class="menu-button">
							<li><a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
							<li><a href="{{slugProduk($myproduk)}}" class="link tip" title="View Detail"></a></li>
						</ul>
					</section>
					</li>
				@endforeach
			</ul><!--end:products-->
			<ul id="pagination">
				{{$produk->links()}}
			</ul>
		</section>
		<aside class="sidebar">
			<div class="side">
				<h4>Category</h4>
				<ul class="cat">
				{{generateKategori($kategori,'<li>;</li>','',';',true)}}
				</ul>
			</div><!--end:side-->
			@if(count($bestseller) > 0)
			<div class="side">
				<h4>Bestsellers</h4>
				@foreach ($bestseller as $item)
				<div class="entry">
					<div class="da-thumbs">
						<div>
							{{HTML::image(getPrefixDomain().'/produk/thumb/'.$item->gambar1)}}
							<article class="da-animate da-slideFromRight" style="display: block;">
								<p><a href="{{slugProduk($item)}}" class="link"></a></p>
							</article>
						</div>
					</div>
					<h3><a href="{{slugProduk($item)}}">{{$item->nama}}</a></h3>
					<small>{{jadiRupiah($item->hargaJual)}}</small>
				</div>
				@endforeach
			</div><!--end:side-->
			@endif
			<div class="side">
				<h4>Banner</h4>
				@foreach(getBanner(1) as $item)
					<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
				@endforeach
			</div><!--end:side-->
		</aside>
	</div><!--end:container-2-->