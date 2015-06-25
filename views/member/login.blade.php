@if(Session::has('error'))
<div class="error" id='message' style='display:none'>							
	{{Session::get('error')}}
</div>
@endif
@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p style="color:#fff !important;">Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>					
</div>
@endif
@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
	<p style="color:#fff !important;">Maaf, email anda tidak ditemukan.</p>					
</div>
@endif	
@if($errors->all())
<div class="alert alert-error">
	Kami menemukan error berikut:			
	<ul>
		@foreach($errors->all() as $message)
		<li style="margin-left: 20px;">{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-error">
	<h3>Kami menemukan error berikut:</h3>
	<p>{{Session::get('error')}}</p>
</div>
@endif

	<div style="clear:both; display:block; height:20px"></div>
	<div class="container-2">
		<section class="content">
			<h2>Login Area &nbsp;</h2>
			{{Form::open(array('url'=>'member/login','method'=>'post','class'=>'form-register'))}}
				<div class="registerbox">
					<fieldset>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span> Email:</label>
							<div class="controls">
								<input type="text" name='email' value='{{Input::old("email")}}' required class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label"><span class="red">*</span> Password:</label>
							<div class="controls">
								<input type="password" name="password" required class="input-xlarge">
							</div>
						</div>
					</fieldset>
				</div>
				<div class="pull-right">
					&nbsp; <input type="Submit" class="submit" value="Login">
					<a class="fl_right" href="{{URL::to('member/forget-password')}}">Lupa password?</a>
				</div>
			{{Form::close()}}
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
			<!-- <div class="side">
				<h4>Our Customer Love Us!</h4>
				<ul class="fade">
					@foreach(list_testimonial() as $testimonial)
					<li class="feed">{{short_description($testimonial->isi,80)}}<br>
						<small><a href="#">&mdash; {{($testimonial->nama)}}</a></small>
					</li><br>
					@endforeach
				</ul>
			</div> -->
		</aside>
	</div><!--end:container-2-->