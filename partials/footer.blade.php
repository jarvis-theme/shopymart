<div class="container-2">
	<div style="clear:both; display:block; height:40px"></div>
	<div class="one-third first">
		<h4>About Us</h4>
		<p> {{shortDescription($aboutUs[1]->isi,300)}} </p>
	</div>
	<div class="one-third">
		<!-- <div class='tweet query'></div> -->
		<h4>Posting Terbaru</h4>
		<ul style="list-style: none;">
			@foreach (list_blog(3) as $items)
			<li><a href="{{blog_url($items)}}">{{$items->judul}}</a><br /><small>&mdash; diposting pada {{waktuTgl($items->created_at)}}</small></li>
			@endforeach
		</ul>
	</div>
	<div class="one-third">
		@if($kontak->fb)
		{{facebookWidget($kontak)}}
		@endif
	</div>
</div>
<div class="content-wrap">
	<div class="container-2">
		<div style="clear:both; display:block; height:40px"></div>
		<div class="ship">
			<a href="#"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/service-1.png')}}" alt=""></a>
			<div style="margin-left:68px;">
				<span>Alamat: </span><br>
				<span>{{$kontak->alamat}} </span><br>
				<span>Telepon: </span><br>
				@if($kontak->telepon && $kontak->hp)
				<span>{{$kontak->telepon}} - {{$kontak->hp}}</span><br><br>
				@else
					@if($kontak->telepon)
					<span>{{$kontak->telepon}}</span><br><br>
					@elseif($kontak->hp)
					<span>{{$kontak->hp}}</span><br><br>
					@else
					 - <br>
					@endif
				@endif
			</div>
		</div>
		<div id="mc_embed_signup" class="subs">
			<h4>Sign up for our Newsletter</h4>
			<form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="validate form-inline subscribes" target="_blank">
				<fieldset>
				  <input type="email" placeholder="Enter your email" name="EMAIL" class="subscribe input-medium required email" id="newsletter mce-EMAIL">
				  <input type="submit" name="submit" value="Submit" class="submit" {{ @$mailing->action==''?'disabled="disabled"':'' }} />
				</fieldset>
			</form>
		</div>
	</div>
</div>

<footer>
	<div class="content-wrap">
		@foreach($tautan as $key=>$group)
		<div class="one-fourth">
			<h4>{{$group->nama}}</h4>                
			<ul>
				@foreach($quickLink as $key=>$link)
				@if($group->id == $link->tautanId)
				<li>
					<a href="{{menu_url($link)}}">{{$link->nama}}</a>
				</li>
				@endif
				@endforeach
			</ul>
		</div>
		@endforeach 
	</div>
	<div class="content-wrap">
		<div style="clear:both; display:block;" class="social-wrap"></div>
		<ul class="social">
			@if($kontak->fb)
			<li>
				<a href="{{URL::to($kontak->fb)}}" class="tip" title="Facebook">
					<div style="padding: 5px; width: 22px;">
					<i class="fa fa-facebook" style="font-size: 16px; color: #fff; margin: 0px 5px;"></i>
					</div>
				</a>
			</li>
			@endif
			@if($kontak->tw)
			<li>
				<a href="{{URL::to($kontak->tw)}}" class="tip" title="Twitter">
					<div style="padding: 5px; width: 22px;">
						<i class="fa fa-twitter" style="font-size: 16px; color: #fff; margin: 0px 5px;"></i>
					</div>
				</a>
			</li>
			@endif
			@if($kontak->gp)
			<li>
				<a href="{{URL::to($kontak->gp)}}" class="tip" title="Google+">
					<div style="padding: 5px; width: 22px;">
						<i class="fa fa-google-plus" style="font-size: 16px; color: #fff; margin: 0px 5px;"></i>
					</div>
				</a>
			</li>
			@endif
			@if($kontak->ig)
			<li>
				<a href="{{URL::to($kontak->ig)}}" class="tip" title="Instagram">
					<div style="padding: 5px; width: 22px;">
						<i class="fa fa-instagram" style="font-size: 16px; color: #fff; margin: 0px 5px;"></i>
					</div>
				</a>
			</li>
			@endif
			@if($kontak->pt)
			<li>
				<a href="{{URL::to($kontak->pt)}}" class="tip" title="Pinterest">
					<div style="padding: 5px; width: 22px;">
						<i class="fa fa-pinterest" style="font-size: 16px; color: #fff; margin: 0px 5px;"></i>
					</div>
				</a>
			</li>
			@endif
			@if($kontak->tl)
			<li>
				<a href="{{URL::to($kontak->tl)}}" class="tip" title="Tumblr">
					<div style="padding: 5px; width: 22px;">
						<i class="fa fa-tumblr" style="font-size: 16px; color: #fff; margin: 0px 5px;"></i>
					</div>
				</a>
			</li>
			@endif
		</ul>
		<ul class="payment" style="width: 70%">
			@foreach(list_banks() as $value)
			<li>
				<a class="tip" title="{{$value->bankdefault->nama}}">
            		<img src="{{bank_logo($value)}}" alt="{{$value->name}}" />
				</a>
			</li>
            @endforeach
            @foreach(list_payments() as $pay)
                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                <li>
					<a class="tip" title="{{$pay->nama}}">
                		<img src="{{url('img/bank/ipaymu.jpg')}}" alt="Ipaymu" />
            		</a>
            	</li>
                @endif
            @endforeach
            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
            <li>
				<a class="tip">
            		<img src="{{url('img/bank/doku.jpg')}}" alt="Doku" />
        		</a>
        	</li>
            @endif
		</ul>
		<p style="clear:both; display:block;">&copy; {{date('Y')}} <a href="{{URL::to('/')}}">{{ Theme::place('title') }}</a>. All Rights Reserved. Powered by <a href="{{URL::to('http://jarvis-store.com/welcome')}}" target="_blank">Jarvis Store</a></p>
	</div>
</footer>