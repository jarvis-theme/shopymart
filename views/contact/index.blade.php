@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
Terjadi kesalahan dalam menyimpan data.<br><br>
@foreach($errors->all() as $message)
-{{ $message }}<br>
@endforeach
</ul>
</div>
@endif

<div class="content-wrap">
<div style="clear:both; display:block; height:20px"></div>
<div class="container-2">
	<section class="content">
        <h3>View Our Map Location</h3>
        @if($kontak->lat=='0' || $kontak->lat=='0')
            <iframe style="width:100%;" width="565" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
        @else
            <iframe style="width:100%;" width="565" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
        @endif
        <br><br>
        <h3>Please use the form below to get in touch with us.</h3>
        <p>{{$kontak->alamat}}<br><br>
              Tel: {{$kontak->telepon}}<br>
              Email: <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></p>
        <form action="{{URL::to('kontak')}}" id="ajax-contact-form" class="contactForm" method="post">
          <div id="note"></div>
          <p>
            <input type="text" name='namaKontak' value="Your Name" onblur="if (this.value == ''){this.value = 'Your Name'; }" onfocus="if (this.value == 'Your Name') {this.value = '';}" >
            &nbsp;
            <input type="text" name="emailKontak" value="Your Email" onblur="if (this.value == ''){this.value = 'Your Email'; }" onfocus="if (this.value == 'Your Email') {this.value = '';}">
            &nbsp;
            
          </p>
          <p>
            <textarea name="messageKontak" rows="10" cols="20" onblur="if (this.value == ''){this.value = 'Your Message'; }" onfocus="if (this.value == 'Your Message') {this.value = '';}">Your Message</textarea>
          </p>
          <p>
            <input type="submit" name="submit" class="submit" value="Kirim">
          </p>
        </form>     
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

