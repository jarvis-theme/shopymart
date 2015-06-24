@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br>
	<ul>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			<div class="side" >
				<h4>Testimonial Kita !</h4>
				<ul class="fade"> 
					@foreach (list_testimonial() as $items)  
					<blockquote class="quote" style="margin-bottom: 10px;">
						<p>{{$items->isi}}</p>
						<small><a href="#">&mdash; {{$items->nama}}</a></small>
					</blockquote>
					@endforeach
				</ul>
				<ul id="pagination">
					{{list_testimonial()->links()}}
				</ul>
			</div>

			<form action="{{URL::to('testimoni')}}" id="ajax-contact-form" class="contactForm" method="post">
				<div id="note" style="border-top: 1px solid #e5e5e5; padding-top: 10px;">Buat Testimonial</div><br>
				<p>
					<input type="text" placeholder="Your Name" required class="input-xlarge" name="nama" >&nbsp;
				</p>
				<p>
					<textarea name="testimonial" placeholder="Your Testimonial" rows="10" cols="20"></textarea>
				</p>
				<p>
					<input type="submit" name="submit" class="submit" value="Kirim Testimonial">
				</p>
			</form>
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