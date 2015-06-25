	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			<div class="entry">
				<h2>{{$detailblog->judul}}</h2>
				<ul>
					<li class="category">Date: <a href="#">{{waktuTgl($detailblog->updated_at)}}</a></li>
					@if(count($detailblog->kategori) > 0)
					<li class="comment">Category: <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a></li>
					@endif
					<li style="display: inline-block; float: right;">{{sosialShare(blog_url($detailblog))}}</li>
				</ul>
				<p>{{$detailblog->isi}}</p>
			</div><!--entry-->
			<div class="navigate comments clearfix">
				@if(isset($prev))
				<div class="pull-left"><a href="{{$prev->slug}}">&larr; Sebelumnya</a></div>
				@else
				<div class="pull-right"></div>
				@endif

				@if(isset($next))
				<div class="pull-right"><a style="float: right;" href="{{$next->slug}}">Selanjutnya &rarr;</a></div>
				@else
				<div class="pull-right"></div>
				@endif
			</div>
			<br><br>
			<div>
				{{$fbscript}}
				{{fbcommentbox(slugBlog($detailblog), '100%', '5', 'light')}}
			</div>
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
			@if(count(vertical_banner()) > 0)
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
			@endif
		</aside>
	</div><!--end:container-2-->