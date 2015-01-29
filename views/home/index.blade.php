<div class="container-2">
    <section class="content">
        <div class="list_work">
        <h4>Products</h4>
        <ul id="mycarousel" class="jcarousel-skin-tango item da-thumbs">
            @foreach($produk as $key=>$myproduk)
            <li>
                <img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="" />
                <span>{{shortName($myproduk->nama,30)}}<br><small class="sale">{{jadiRupiah($myproduk->hargaCoret,false)}}</small>&nbsp;&nbsp;<small>{{jadiRupiah($myproduk->hargaJual,$matauang)}}</small></span>
                <!--<span class="sale">Sale</span>-->

                <article class="da-animate da-slideFromRight" style="display: block;">
                    <h3><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></h3>
                    <p>
                    <a href="{{slugProduk($myproduk)}}" class="link tip" title="View Detail"></a>&nbsp;
                    <a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a></p>
                </article>
            </li>
            @endforeach
            </ul>
        </div><!--end:list_work-->
        @if(count($newproduk) >1)
        <div class="list_work list_work2">
            <h4>New Arrival</h4>
            <ul id="mycarouselnew" class="jcarousel-skin-tango item">
                @foreach($newproduk as $key=>$myproduk)
                <li>
                    <img src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="" />
                    <span>{{shortName($myproduk->nama,30)}}<br><small class="sale">{{jadiRupiah($myproduk->hargaCoret,false)}}</small>&nbsp;&nbsp;<small>{{jadiRupiah($myproduk->hargaJual,$matauang)}}</small></span>
                    <span class="new">New</span>
                    <ul>
                        <li><a href="{{slugProduk($myproduk)}}" class="cart tip" title="Add to Cart">Cart</a></li>
                        <li><a href="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom">Zoom</a></li>                        
                    </ul>
                </li>
                @endforeach     
            </ul>
        </div><!--end:list_work-->
        @endif
    </section>
    <aside class="sidebar">
        <div class="side">
            <h4>Banner</h4>
            @foreach(getBanner(1) as $item)
                <div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
            @endforeach 
        </div><!--end:side-->
        <div class="side">
            <h4>Hubungi Kami</h4>
            <div style="min-height: 120px;">   
                {{ymyahoo($shop->ym)}}

                @if($shop->telepon)
                    <div class="pull-left clabel">Telp.</div>
                    <small> &mdash; {{$shop->telepon}}</small>
                @endif

                @if($shop->hp)
                    <div class="pull-left clabel">HP.</div>
                    <small> &mdash; {{$shop->hp}}</small>
                @endif

                @if($shop->email)
                    <div class="pull-left clabel">Email.</div>
                    <small><a href="mailto:{{$shop->email}}" target="_top">&mdash; {{$shop->email}}</a></small>
                @endif
                @if($shop->bb)
                    <div class="pull-left" style="float:left"><img src="{{URL::to('img/bbm.png')}}" style="width: 20px;"><span>&mdash; {{$shop->bb}}</span></div>
                @endif                
            </div>
            
        </div><!--end:side-->
        <div class="side">
            <h4>Our Customer Love Us!</h4>
            <ul class="fade" style="min-height: 120px;"> 
                @foreach ($testimo as $items)                  
                    <li class="feed">{{$items->isi}}<br>
                    <small><a href="#">&mdash; {{$items->nama}}</a></small>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div><!--end:container-2-->
