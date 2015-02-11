<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			<div class="entry">
				<h2>{{$data->judul}}</h2>
				<ul></ul>
				<p>{{$data->isi}}</p>
			</div><!--entry-->
		</section>
		<aside class="sidebar">
			
			<div class="side">
				<h4>Banner</h4>
				@foreach(getBanner(1) as $item)
				<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
				@endforeach
			</div><!--end:side-->
			
		</aside>
	</div><!--end:container-2-->