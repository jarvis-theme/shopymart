	<div class="container-2">
		<div style="clear:both; display:block; height:40px"></div>
		<div class="prod">
			<div class="clearfix"> 
				<a href="{{URL::to(product_image_url($produk->gambar1))}}" class="jqzoom" rel='gal1'  title="triumph">
					<img src="{{URL::to(product_image_url($produk->gambar1,'large'))}}" style="width:100%;border: 4px solid #e5e5e5;">
				</a>
			</div>
			<div class="clearfix" >
				<ul id="thumblist" class="clearfix" >
				@if($produk->gambar1!='')
					<li>
						<a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '{{URL::to(product_image_url($produk->gambar1))}}',largeimage: '{{URL::to(product_image_url($produk->gambar1))}}'}"><img src="{{URL::to(product_image_url($produk->gambar1,'large'))}}"></a>
					</li>
				@endif
				@if($produk->gambar2!='')
					<li><a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '{{URL::to(product_image_url($produk->gambar2))}}',largeimage: '{{URL::to(product_image_url($produk->gambar2))}}'}"><img src="{{URL::to(product_image_url($produk->gambar2,'large'))}}"></a></li>
				@endif
				@if($produk->gambar3!='')
					<li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '{{URL::to(product_image_url($produk->gambar3))}}',largeimage: '{{URL::to(product_image_url($produk->gambar3))}}'}"><img src="{{URL::to(product_image_url($produk->gambar3,'large'))}}"></a></li>
				@endif
				@if($produk->gambar4!='')
					<li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../{{URL::to(product_image_url($produk->gambar4))}}',largeimage: '{{URL::to(product_image_url($produk->gambar4))}}'}"><img src="{{URL::to(product_image_url($produk->gambar4,'large'))}}"></a></li>
				@endif
				</ul>
			</div>
		</div><!--end:prod-->
		<div class="prod-detail">
			<form action="#" id='addorder'>
			<h2>{{$produk->nama}}</h2>
			<div style="margin-bottom: 15px">{{sosialShare(product_url($produk))}}</div>
			<span class="price">{{ price($produk->hargaJual) }}</span>
			<br>
			@if($opsiproduk->count() > 0)					
				<select name="opsiproduk">
					<option value="">-- Pilih Opsi --</option>
					@foreach ($opsiproduk as $key => $opsi)
					<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >				
						{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}				
					</option>
					@endforeach
				</select>
				<!-- </p> -->
			@endif  
			<p>Jumlah : <input type="text" placeholder="qty" class="span1" name='qty' value="1"></p>                     
			<span class="cart-button"><button type="submit" style="cursor: pointer;" class="add_cart">Tambah Ke Keranjang</button></span>
			</form>
			<div id="tab">
				<ul class="nav">
					<li class="nav-one"><a href="#desc" class="current">Deskripsi</a></li>
					<li class="nav-two"><a href="#detail">Detail</a></li>
					<li class="nav-three"><a href="#reviews">Reviews</a></li>
					<li class="nav-four"><a href="#tags">Tags</a></li>
					<!-- <li class="nav-five last"><a href="#share">Share</a></li> -->
				</ul>
				<div class="list-wrap">
					<div id="desc">
						{{$produk->deskripsi}}
					</div>
					<ul id="detail" class="hide">
						<li><span>Berat:</span> {{$produk->berat}} gram</li>
						<li><span>Stock:</span> {{$produk->stok}}</li>
						<li><span>Vendor:</span> {{$produk->vendor}}</li>
					</ul>
					<div id="reviews" class="hide" style="min-height: 110px;">
						{{pluginTrustklik()}}
					</div> 
					<ul id="tags" class="hide">
						{{getTagsProduk('<li><a href="#"></a></li>',$produk->tags,',');}}
					</ul>
					<div id="share" class="hide">
					</div>
				</div>
			</div>
		</div><!--prodetail-->
        @if(count(other_product($produk)) > 0)
		<div class="relatedprod">
			<h4>Related Products</h4>
			@foreach(other_product($produk) as $key => $myproduk)
				@if($key==0)
				<div class="entry first">
				@else
				<div class="entry">
				@endif
				<div class="da-thumbs">
					<div class="div-related">
						{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama)}}
						<article class="da-animate da-slideFromRight" style="display: block;">
							<p>
								<a href="{{product_url($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
								<a href="{{URL::to(product_image_url($myproduk->gambar1,'large'))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
							</p>
						</article>
					</div>
				</div>
				<h3><a href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a></h3>
				<span>{{price($myproduk->hargaJual)}}</span>
			</div>
			@endforeach
		</div>
		@endif
	</div>