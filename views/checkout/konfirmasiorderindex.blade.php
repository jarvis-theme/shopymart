@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>					
</div>		
@endif
<div class="content-wrap">
	<div style="clear:both; display:block; height:20px"></div>
<div class="container-2">
	<section class="content">
    	<h2>Konfirmasi Order &nbsp;</h2>
        {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-register'))}}
        <div class="registerbox">
          <fieldset>
            
            <div class="control-group">
              <label class="control-label"> Kode Order:</label>
              <div class="controls">
                <input type="text" placeholder="Kode Order" name='kodeorder' required class="input-xlarge">
              </div>
            </div>
           
          </fieldset>
        </div>
        <div class="pull-right">
          &nbsp;
          <input type="Submit" class="submit" value="Cari Kode">
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
    </aside>
</div><!--end:container-2-->
