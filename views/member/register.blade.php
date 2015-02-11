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

<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>	
	<div class="container-2">
		<section class="content">
			<h2>Register Account &nbsp;<small>Register your information details.</small></h2>
			{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-register'))}}
				<h3>Your Personal Details</h3>
				<div class="registerbox">
					<fieldset>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span> Nama:</label>
							<div class="controls">
								<input type="text" name="nama" value="{{Input::old('nama')}}" required class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span> Email:</label>
							<div class="controls">
								<input type="text" name='email' value='{{Input::old("email")}}' required class="input-xlarge">
							</div>
						</div>
					</fieldset>
				</div>
				<h3>Your Address</h3>
				<div class="registerbox">
					<fieldset>
						<div class="control-group">
							<label for="select01" class="control-label"><span class="red">*</span>Negara:</label>
							<div class="controls">
								{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old(''),array('required', 'id="negara" data-rel="chosen" class="span3"'))}}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span>Provinsi:</label>
							<div class="controls">
								{{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'id="provinsi" data-rel="chosen" class="span3"'))}}
							</div>
						</div>
						 <div class="control-group">
							<label class="control-label"><span class="red">*</span>Kota:</label>
							<div class="controls">
								{{Form::select('kota',array('' => '-- Pilih Kota --'),Input::old("kota"), array('required'=>'','id'=>'kota', 'class'=>'span3'))}}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"> Alamat:</label>
							<div class="controls">
								<textarea class="span6" name='alamat' required>{{Input::old("alamat")}}</textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span>Kode Pos:</label>
							<div class="controls">
								<input type="text"  class="input-xlarge" name='kodepos' value='{{Input::old("kodepos")}}' required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span>Telepon / HP:</label>
							<div class="controls">
								<input type="text" name='telp' value='{{Input::old("telp")}}' required class="input-xlarge">
							</div>
						</div>
						<div class="control-group" style="margin-bottom: -18px;">
							<label class="control-label"><span class="red">*</span>Captcha:</label>
							<div class="controls">
								{{ HTML::image(Captcha::img(), 'Captcha image') }}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><span class="red">&nbsp;</span></label>
							<div class="controls">
								{{Form::text('captcha')}}
							</div>
						</div>
					</fieldset>
				</div>
				<h3>Your Password</h3>
				<div class="registerbox">
					<fieldset>
						<div class="control-group">
							<label  class="control-label"><span class="red">*</span> Password:</label>
							<div class="controls">
								<input type="password" name="password" required class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label"><span class="red">*</span> Password Confirm::</label>
							<div class="controls">
								<input type="password" type="password" name="password_confirmation" required  class="input-xlarge">
							</div>
						</div>
					</fieldset>
				</div>
				<div class="pull-right">
					<label class="checkbox inline">
						<input type="checkbox" name='readme' value="1" >
					</label>
					Saya telah membaca dan menyetujui <a href="{{URL::to('service')}}" target="_blank" >Privacy Policy</a>
					&nbsp;
					<input type="Submit" class="submit" value="Continue">
				</div>
			{{Form::close()}}
		</section>
		<aside class="sidebar">
			<div class="side">
				<h4>Banner</h4>
				@foreach(getBanner(1) as $item)
				<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
				@endforeach
			</div><!--end:side-->
			<div class="side">
				<h4>Our Customer Love Us!</h4>
				<ul class="fade">					
					<li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
						<small><a href="#">&mdash; Louie Jie Mahusay</a></small>
					</li>
					<li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
						<small><a href="#">&mdash; Louie Jie Mahusay</a></small>
					</li>
					<li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
						<small><a href="#">&mdash; Louie Jie Mahusay</a></small>	
					</li>
					<li class="feed">Easy shopping experience! Pricing is attractive! Lots of styles to choose from and great pics!<br>
						<small><a href="#">&mdash; Louie Jie Mahusay</a></small>
					</li>
				</ul>
			</div>
		</aside>
	</div><!--end:container-2-->