<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			@foreach($data as $key=>$value)	
	        <div class="entry">
	            <h2><a href="{{slugBlog($value)}}">{{$value->judul}}</a></h2>
	            <ul>
	                <li class="category">{{waktuTgl($value->updated_at)}}</li>
	            </ul>
	            {{shortDescription($value->isi, 330)}}
	            <span><a href="{{slugBlog($value)}}"><br>Baca Selengkapnya</a></span>
	        </div><!--entry-->
	        @endforeach	
	        <ul id="pagination">
	            {{$data->links()}}
	        </ul>
	    </section>
	    <aside class="sidebar">
	    	<div class="side">
	        	<h4>Category</h4>
	            <ul class="cat">
	                @foreach($categoryList as $key=>$value)	
                    <li><a href="{{URL::to('blog/category/'.generateSlug($value))}}">{{$value->nama}}</a></li>
                    @endforeach
	            </ul>
	        </div><!--end:side-->
	        <div class="side">
				<h4>Banner</h4>
				@foreach(getBanner(1) as $item)	
				<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
				@endforeach	
			</div><!--end:side-->	    	
	    </aside>
	</div><!--end:container-2-->