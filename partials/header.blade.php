<header>
	<div id="top">
	  @if ( !is_login() )	
		 <span>Selamat berbelanja</span>
	  @else 	
		<span>Selamat datang, {{HTML::link('member', user()->nama)}}</span>
	  @endif	
	</div><!--end:top-->
	<div id="top2">
		<ul class="myaccountmenu">
			<li><a href="{{URL::to('/')}}" class="first">Home</a></li>
		@if ( !is_login() )	
			<li class="login"><a href="{{URL::to('member/create')}}" class="last login-window">Register</a></li>
			<li class="login"><a href="{{URL::to('member')}}" class="last login-window">Login</a></li>
		@else 	
			<li><a href="{{URL::to('member')}}" class="">My Account</a></li>
			<li class="login"><a href="{{URL::to('logout')}}" class="last login-window">Logout</a></li>
		@endif	
		</ul>
		<div id="login-box" class="login-popup">
			<a href="#" class="close"><img class="btn_close" title="Close Window" alt="Close" /></a>
			<form method="post" class="signin" action="{{URL::to('member/login')}}">
				<fieldset class="textbox">
					<label class="username">
						<span>Email</span>
						<input id="username" name="email" type="text" autocomplete="on" placeholder="Username" required>
					</label>
					<label class="password">
						<span>Password</span>
						<input id="password" name="password" type="password" placeholder="Password" required>
					</label>
					<button class="submit button" type="button">Sign in</button>
					<p>
						<a class="forgot" href="#">Forgot your password?</a> / <a class="register" href="{{URL::to('member/create')}}">Create an Account</a>
					</p>        
				</fieldset>
			</form>
		</div>
		<div id="shoppingcartplace">{{$ShoppingCart}}</div>
	</div><!--end:top2-->
	<div id="top3">
	@if(logo_image_url())	
		<h1 style="margin:0px 25px 15px;">
			<a href="{{URL::to('home')}}">
				<img style="max-height: 180px;float:left;margin:1%" src="{{URL::to(logo_image_url())}}" />
			</a>
		</h1>
	@else 	
		<h1 style="margin:0px 25px 15px;"><a style="margin:1%" href="{{URL::to('home')}}">{{ Theme::place('title') }}</a></h1>
	@endif	
		<form action="{{URL::to('search')}}" method="post" class="search_bar" >
			<fieldset>
				<input type="text" name="search" class="search" placeholder="Search" onBlur="if (this.value == ''){this.value = 'Enter a keywords...'; }" onFocus="if (this.value== 'Enter a keywords...') {this.value = ''; }" required />
				<input type="submit" name="submit" placeholder="Search" class="submit" />
			</fieldset>
		</form>
	</div><!--end:top3-->
</header>
<div id="container">
  <nav>  
	<ul id="mega-menu-3" class="mega-menu">
		@foreach(list_category() as $side_menu)
            @if($side_menu->parent == '0')
            <li>
                <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}</a>
                @if($side_menu->anak->count() != 0)
                <ul>
                    @foreach($side_menu->anak as $submenu)
                    @if($submenu->parent == $side_menu->id)
                    <li>
                        <a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
                        @if($submenu->anak->count() != 0)
                        <ul>
                            @foreach($submenu->anak as $submenu2)
                            @if($submenu2->parent == $submenu->id)
                            <li style="padding-left: 10px;">
                                <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endif
                    @endforeach
                </ul>
                @endif
            </li>
            @endif
        @endforeach
	</ul>
</nav><!--end:grey-->