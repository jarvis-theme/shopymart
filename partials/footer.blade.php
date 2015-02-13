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
			@foreach ($blogBaru as $items)
				<li><a href="{{slugBlog($items)}}">{{$items->judul}}</a><br /><small>&mdash; diposting pada {{waktuTgl($items->created_at)}}</small></li>
			@endforeach
			</ul>
		</div>
		<div class="one-third">
			@if($kontak->fb)
			<div class="fb-like-box" data-href="{{$kontak->fb}}" data-width="280" data-show-faces="true" data-stream="false" data-border-color="#e5e5e5" data-header="false"></div>
			@endif
		</div>
	</div><!--end:container-2-->
	<div class="container-2">
		<div style="clear:both; display:block; height:40px"></div>
		<div class="ship">
			<a href="#"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/service-1.png')}}" alt=""></a>
			<div style="margin-left:68px;">
				<span>Alamat: </span><br>
				<span>{{$kontak->alamat}} </span><br>
				<span>Telepon: </span><br>
				<span>{{$kontak->telepon}}</span><br><br>
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
	</div><!--end:container-2-->
</div><!--end:content-wrap-->

<footer>
	<div class="content-wrap">
		@foreach($tautan as $key=>$group)
		<div class="one-fourth">
			<h4>{{$group->nama}}</h4>                
			<ul>
			@foreach($group->link as $key=>$link)
				<li>
					@if($link->halaman=='1')
						<a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
					@elseif($link->halaman=='2')
						<a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
					@elseif($link->url=='1')
						<a href="http://{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
					@else
						<a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
					@endif
				</li>
			@endforeach
			</ul>
		</div>
		@endforeach 
	</div>
	<div class="content-wrap">
		<div style="clear:both; display:block;" class="social-wrap"></div>
		<ul class="social">

			@if($kontak->fb)
			<li><a href="{{URL::to($kontak->fb)}}" class="tip" title="Facebook"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/social-icon-facebook.png')}}" alt="Facebook"></a></li>
			@endif

			@if($kontak->gp)
			<li><a href="{{URL::to($kontak->gp)}}" class="tip" title="Google+"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/social-icon-dribbble.png')}}" alt="Google+"></a></li>
			@endif

			@if($kontak->ig)
			<li><a href="{{URL::to($kontak->ig)}}" class="tip" title="Instagram"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/social-icon-flickr.png')}}" alt="Instagram"></a></li>
			@endif

			@if($kontak->pt)
			<li><a href="{{URL::to($kontak->pt)}}" class="tip" title="Pinterest"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/social-icon-pinterest.png')}}" alt="Pinterest"></a></li>
			@endif

			@if($kontak->tw)
			<li><a href="{{URL::to($kontak->tw)}}" class="tip" title="Twitter"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/social-icon-twitter.png')}}" alt="Twitter"></a></li>
			@endif

		</ul>
		<ul class="payment">
			@if(!empty($bank))
				@foreach($bank as $value)
					<li><a class="tip" title="{{$value->name}}"><img src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="{{$value->name}}"></a></li>
				@endforeach
			@endif
		</ul>
		<p style="clear:both; display:block;">&copy; {{date('Y')}} <a href="{{URL::to('/')}}">{{ Theme::place('title') }}</a>. All Rights Reserved. Powered by <a href="{{URL::to('http://jarvis-store.com/welcome')}}">Jarvis Store</a></p>
	</div>
</footer>