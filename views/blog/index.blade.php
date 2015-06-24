<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			@foreach(list_blog(null, @$blog_category) as $key=>$value)	
	        <div class="entry">
	            <h2><a href="{{blog_url($value)}}">{{$value->judul}}</a></h2>
	            <ul>
	                <li class="category">{{waktuTgl($value->updated_at)}}</li>
	            </ul>
	            {{shortDescription($value->isi, 330)}}
	            <span><a href="{{blog_url($value)}}"><br>Baca Selengkapnya</a></span>
	        </div><!--entry-->
	        @endforeach	
	        <!-- <ul id="pagination"> -->
            {{list_blog(null, @$blog_category)->links()}}
	        <!-- </ul> -->
	    </section>
	    <aside class="sidebar">
	    	<div class="side">
	        	<h4>Category</h4>
	            <ul class="cat">
	                @foreach(list_blog_category() as $key=>$value)	
                    <li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
                    @endforeach
	            </ul>
	        </div><!--end:side-->
	        <div class="side">
				<h4>Banner</h4>
				@foreach(vertical_banner() as $item)	
				<div>
					<a href="{{URL::to($item->url)}}">
						<img src="{{banner_image_url($item->gambar)}}" />
					</a>
				</div>
				@endforeach	
			</div><!--end:side-->	    	
	    </aside>
	</div><!--end:container-2-->