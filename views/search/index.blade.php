<div class="content-wrap">
<div style="clear:both; display:block; height:20px"></div>
<div class="container-2">
	<section class="content">
    	<div class="ctrl">
        </div>
        <ul id="products" class="list clearfix">
        	@if($jumlahCari!=0)
                @foreach($hasilpro as $myproduk)
        		<li class="da-thumbs">
            	<div class="product-thumb-hover">
                    <section class="left">
                        {{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class="img1"'))}}
                        <!-- <p class="sale">Sale</p> -->
                        <article class="da-animate da-slideFromRight" style="display: block;">
                            <h3>{{$myproduk->nama}}</h3>
                            <p>
                            <a href="{{slugProduk($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
                            <a href="cart.html" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                            <a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
                        </article>
                    </section>
                </div>
                <section class="center">
                	<h3>{{$myproduk->nama}}</h3>
                    <em>Category: <a href="#">Men's Dress</a></em>
                </section>
                <section class="right">
                    <span class="price"><small>{{jadiRupiah($myproduk->hargaCoret, false)}}</small>&nbsp;&nbsp; {{jadiRupiah($myproduk->hargaJual)}}</span>
                    <ul class="menu-button">
                   
                        <li><a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
                        <li><a href="{{slugProduk($myproduk)}}" class="link tip" title="View Detail"></a></li>
                    </ul>
                </section>
            	</li>
            @endforeach
        @else
            <li>Hasil tidak ditemukan</li>
        @endif
        </ul><!--end:products-->
        <ul id="pagination">
        	{{--$produk->links()--}}
            <!-- <li><a class="current" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">next</a></li> -->
        </ul>
    </section>
    <aside class="sidebar">
        <div class="side">

        	<h4>Banner</h4>
            @foreach(getBanner(1) as $item)
            	<div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
            @endforeach
            
        </div><!--end:side-->
        
    </aside>
</div><!--end:container-2-->

