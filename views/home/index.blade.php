<div class="container-2">
	<section class="content">
		<div class="list_work">
			<h4>Products</h4>
			<ul id="mycarousel" class="jcarousel-skin-tango item da-thumbs">
				@foreach(home_product() as $key=>$myproduk)
				<li>
					<img src="{{URL::to(product_image_url($myproduk->gambar1))}}" alt="{{$myproduk->nama}}" />
					<span>{{shortName($myproduk->nama,30)}}<br><small class="sale">{{price($myproduk->hargaCoret,false)}}</small>&nbsp;&nbsp;<small>{{price($myproduk->hargaJual,$matauang)}}</small></span>
					<!--<span class="sale">Sale</span>-->

					<article class="da-animate da-slideFromRight" style="display: block;">
						<h3><a href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a></h3>
						<p>
							<a href="{{product_url($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
							<a href="{{url(product_image_url($myproduk->gambar1,'large'))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
						</p>
					</article>
				</li>
				@endforeach
			</ul>
		</div><!--end:list_work-->
		@if(count(new_product()) >= 1)
		<div class="list_work list_work2">
			<h4>New Arrival</h4>
			<ul id="mycarouselnew" class="jcarousel-skin-tango item">
				@foreach(new_product() as $key=>$myproduk)
				<li>
					<img src="{{URL::to(product_image_url($myproduk->gambar1))}}" />
					<span>{{shortName($myproduk->nama,30)}}<br><small class="sale">{{price($myproduk->hargaCoret,false)}}</small>&nbsp;&nbsp;<small>{{price($myproduk->hargaJual,$matauang)}}</small></span>
					<span class="new">New</span>
					<ul>
						<li><a href="{{product_url($myproduk)}}" class="cart tip" title="View Detail">Detail</a></li>
						<li><a href="{{URL::to(product_image_url($myproduk->gambar1))}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom">Zoom</a></li>                        
					</ul>
				</li>
				@endforeach     
			</ul>
		</div><!--end:list_work-->
		@endif
	</section>
	<aside class="sidebar">
		<div class="side">
			<h4>Banner</h4>
			@foreach(vertical_banner() as $item)
			<div>
				<a href="{{URL::to($item->url)}}">
					<img src="{{URL::to(banner_image_url($item->gambar))}}" alt="info {{Theme::place('title')}}" />
				</a>
			</div>
			@endforeach 
		</div><!--end:side-->
		<div class="side">
			<h4>Hubungi Kami</h4>
			<div style="min-height: 120px;">
			@if($shop->ym)
				{{ ymyahoo($shop->ym) }}
			@endif	
			<br>
			@if($shop->telepon)
				<div class="pull-left clabel">Telp.</div><br>
				<small> &mdash; {{$shop->telepon}}</small><br>
			@endif	
			@if($shop->hp)
				<div class="pull-left clabel">HP.</div><br>
				<small> &mdash; {{$shop->hp}}</small><br>
			@endif	
			@if($shop->email)
				<div class="pull-left clabel">Email.</div><br>
				<small><a href="mailto:{{$shop->email}}" target="_top">&mdash; {{$shop->email}}</a></small><br>
			@endif	
			@if($shop->bb)
				<div class="pull-left" style="float:left"><img src="{{URL::to('img/bbm.png')}}" style="width: 20px;"><span>&mdash; {{$shop->bb}}</span></div><br>
			@endif  
			</div>
			
		</div><!--end:side-->
		<div class="side">
			<h4>Our Customer Love Us!</h4>
			<ul class="fade" style="min-height: 120px;"> 
				@foreach (list_testimonial() as $items)	
				<li class="feed">{{$items->isi}}<br>
					<small><a href="#">&mdash; {{$items->nama}}</a></small>
				</li>
				@endforeach	
			</ul>
		</div>
	</aside>
</div><!--end:container-2-->