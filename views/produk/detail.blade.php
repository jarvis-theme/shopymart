<div class="content-wrap">
	<div class="container-2">
		<div style="clear:both; display:block; height:40px"></div>
		<div class="prod">
			<div class="clearfix"> 
				<a href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}" class="jqzoom" rel='gal1'  title="triumph" style=""> <img src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}" style="width:100%;border: 4px solid #e5e5e5;"> </a>
			</div>
			<div class="clearfix" >
				<ul id="thumblist" class="clearfix" >
					@if($produk->gambar1!='')
				  <li>
					<a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar1}}',largeimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar1}}'}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}"></a>
				  </li>
				  @endif
				  @if($produk->gambar2!='')
				  <li><a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar2}}',largeimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar2}}'}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar2)}}"></a></li>
				  @endif
				  @if($produk->gambar3!='')
				  <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar3}}',largeimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar3}}'}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar3)}}"></a></li>
				  @endif
				  @if($produk->gambar4!='')
				  <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar4}}',largeimage: '../{{getPrefixDomain().'/produk/'.$produk->gambar4}}'}"><img src="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar4)}}"></a></li>
				  @endif
				</ul>
			</div>
		</div><!--end:prod-->
		<div class="prod-detail">
			<form action="#" id='addorder'>
			<h2>{{$produk->nama}}</h2>
			<span class="price">{{ jadiRUpiah($produk->hargaJual) }}</span>
			<br>
			@if($opsiproduk->count()>0)					
				<select name="opsiproduk">
					<option value="">-- Pilih Opsi --</option>
					@foreach ($opsiproduk as $key => $opsi)
					<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >				
						{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}				
					</option>
					@endforeach
				</select>
				</p>
			@endif  
			<p>Jumlah : <input type="text" placeholder="qty" class="span1" name='qty' value="1"></p>                     
			<span class="cart-button"><button type="submit" style="cursor: pointer;" class="add_cart">Tambah Ke Keranjang</button></span>
			</form>
			<div id="tab">
				<ul class="nav">
					<li class="nav-one"><a href="#details" class="current">Details</a></li>
					<li class="nav-two"><a href="#specs">Specification</a></li>
					<li class="nav-three"><a href="#reviews">Reviews</a></li> 
					<li class="nav-four last"><a href="#tags">Tags</a></li>
				</ul>
				<div class="list-wrap">
					<div id="details">
						{{$produk->deskripsi}}
					</div>
					<ul id="specs" class="hide">
						<li><span>Berat:</span> {{$produk->berat}} gram</li>
						<li><span>Stock:</span> {{$produk->stok}}</li>
						<li><span>Vendor:</span> {{$produk->vendor}}</li>
					</ul>
					<div id="reviews" class="hide">
						<form action="#">
						  <fieldset>
							  {{$fbscript}}
						  {{fbcommentbox(slugProduk($produk), '500px', '5', 'light')}}
						  </fieldset>
						</form>
					</div> 
					<ul id="tags" class="hide">
						{{getTagsProduk('<li><a href="#"></a></li>',$produk->tags,',');}}
					</ul>
				</div>
			</div>
		</div><!--prodetail-->
		@if(count($produklain) > 0)
		<div class="relatedprod">
			<h4>Related Products</h4>
			@foreach($produklain as $key => $myproduk)
			@if($key==0)
				<div class="entry first">
			@else
				<div class="entry">
			@endif
				<div class="da-thumbs">
					<div class="div-related">
						{{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama)}}
						<article class="da-animate da-slideFromRight" style="display: block;">
						<p>
						<a href="{{slugProduk($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
						<a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
						</article>
					</div>
				</div>
				<h3><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></h3>
				<span>{{jadiRupiah($myproduk->hargaJual)}}</span>
			 </div>
			 @endforeach
		</div>
		@endif
	</div>