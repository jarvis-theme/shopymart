	<div style="clear:both; display:block; height:20px"></div>	
	<div class="container-2">
		<section class="content" id="reg">
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
								{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old('negara'),array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"span3"))}}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"><span class="red">*</span>Provinsi:</label>
							<div class="controls">
								{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"span3"))}}
							</div>
						</div>
						 <div class="control-group">
							<label class="control-label"><span class="red">*</span>Kota:</label>
							<div class="controls">
								{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"), array('required'=>'','id'=>'kota', 'class'=>'span3'))}}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"> Alamat:</label>
							<div class="controls">
								<textarea class="input-xlarge" name='alamat' rows="4" cols="28" required>{{Input::old("alamat")}}</textarea>
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
							<label  class="control-label"><span class="red">*</span> Password Confirm:</label>
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
				@foreach(vertical_banner() as $item)
				<div>
					<a href="{{URL::to($item->url)}}">
						<img src="{{URL::to(banner_image_url($item->gambar))}}" />
					</a>
				</div>
				@endforeach
			</div><!--end:side-->
			<div class="side">
				<h4>Our Customer Love Us!</h4>
				<ul class="fade">
					@foreach(list_testimonial() as $testimonial)
					<li class="feed">{{short_description($testimonial->isi,80)}}<br>
						<small><a href="#">&mdash; {{($testimonial->nama)}}</a></small>
					</li><br>
					@endforeach
				</ul>
			</div>
		</aside>
	</div><!--end:container-2-->