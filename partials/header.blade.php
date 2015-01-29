<header>
    <div id="top">
      @if ( ! Sentry::check())
         <span>Selamat berbelanja</span>
      @else
        <span>Selamat datang, {{HTML::link('member', Sentry::getUser()->nama)}}</span>
      @endif
    </div><!--end:top-->
    <div id="top2">
        <ul class="myaccountmenu">
            <li><a href="{{URL::to('/')}}" class="first">Home</a></li>
        @if ( ! Sentry::check())
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
        @if(@getimagesize(URL::to(getPrefixDomain().'/galeri/'.$toko->logo)))
		<h1 style="margin:0px 25px 15px;"><a href="{{URL::to('home')}}"><img style="max-height: 180px;float:left;margin:1%" src="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}" /></a></h1>
	@else
		<h1 style="margin:0px 25px 15px;"><a style="margin:1%" href="{{URL::to('home')}}">{{ Theme::place('title') }}</a></h1>
	@endif
	<form action="{{URL::to('search')}}" method="post" class="search_bar" >
            <fieldset>
              <input type="text" name="search" class="search" placeholder="Search" onBlur="if (this.value == ''){this.value = 'Enter a keywords...'; }" onFocus="if (this.value== 'Enter a keywords...') {this.value = ''; }" required />
              <input type="submit" name="submit" value="Search" class="submit" />
            </fieldset>
        </form>
    </div><!--end:top3-->
</header>
<div id="container">
  <nav>  
    <ul id="mega-menu-3" class="mega-menu">
        @if($katMenu!='1')   
            @foreach($katMenu as $key=>$menu)
                <li>
                    @if($menu->parent=='0')
                    <a href={{URL::to('category/'.$menu->slug)}}>{{$menu->nama}}</a>
                    <ul>
                    <!--SUbmenu Starts-->
                    @foreach($anMenu as $key1=>$submenu)
                        
                        @if($submenu->parent==$menu->id) 
                            <li><a href={{URL::to('category/'.$submenu->slug)}}>{{$submenu->nama}}</a>
                                <ul class="">
                                    @foreach($anMenu as $key2=>$submenu2)                                
                                        @if($submenu->id==$submenu2->parent)
                                        <li><a href={{URL::to('category/'.$submenu2->slug)}}>{{$submenu2->nama}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                        
                    @endforeach
                    </ul>
                    <!--SUbmenu Ends-->
                    
                </li>
                    @endif
            @endforeach
        
        @endif
        

    </ul>
</nav><!--end:grey-->
