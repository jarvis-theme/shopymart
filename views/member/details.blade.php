<div class="content-wrap">
<div style="clear:both; display:block; height:20px"></div>
<div class="container-2">
	<section >
    	<div id="tab" class="tab2">
            <ul class="nav nav2">
              <li class="nav-two"><a href="#order" class="current">My Orders</a></li>
              <li class="nav-one"><a href="#account" >My Accounts</a></li>
                
            </ul>
            <div class="list-wrap myaccount">
              <div id="order" >
                <table class="shopping-cart">
                  <tr>
                    <th class="image">ID Order</th>
                    <th class="name">Tanggal Order</th>
                    <th class="model">Detail Order</th>
                    <th class="quantity">Total Order</th>
                    <th class="price">No. Resi</th>
                    <th class="total">Status</th>
                    <th class="action">Action</th>
                  </tr>

                  @foreach ($order as $item)
                  <tr>
                    <td class="image">{{prefixOrder()}}{{$item->kodeOrder}}</td>
                    <td  class="name">{{waktu($item->tanggalOrder)}}</td>
                    <td class="model">
                    <ul>
                    @foreach ($item->detailorder as $detail)
                    <li style="margin-left: 8px">{{$detail->produk->nama}} {{--$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''--}} - {{$detail->qty}}</li>
                    @endforeach
                    </ul>
                    </td>
                    <td class="quantity">{{ jadiRupiah($item->total)}}</td>
                    <td class="price">{{ $item->noResi}}</td>
                    <td class="total">@if($item->status==0)
                      <span class="label label-warning">Pending</span>
                      @elseif($item->status==1)
                      <span class="label label-important">Konfirmasi diterima</span>
                      @elseif($item->status==2)
                      <span class="label label-info">Pembayaran diterima</span>
                      @elseif($item->status==3)
                      <span class="label label-info">Terkirim</span>
                      @elseif($item->status==4)
                      <span class="label label-info">Batal</span>
                      @endif</td>
                    <td class="remove-update">
                    <a href="{{URL::to('konfirmasiorder/'.$item->id)}}" class="tip update" title="Konfirmasi Pembayaran"><img src="{{URL::to(dirTemaToko().'shopymart/assets/images/update.png')}}" alt=""></a></td>  
                  </tr>
                  @endforeach
                </table>
                <h2>History Transaksi &nbsp;</h2>
              </div>
                <div id="account" class="hide">	
            {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-register'))}}
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Nama:</label>
                  <div class="controls">
                    <input type="text" name="nama" value='{{$user->nama}}' required class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    <input type="text" name='email' value='{{$user->email}}' required class="input-xlarge">
                  </div>
                </div>
                
              </fieldset>
            </div>
            <h3>Your Address</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label for="select01" class="control-label">
                    <span class="red">*</span>Negara:</label>
                  <div class="controls">
                  	{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'span3'))}}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Provinsi:</label>
                  <div class="controls">
                  	{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'span3'))}}
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Kota:</label>
                  <div class="controls">
                  	{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'span3'))}}
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"> Alamat:</label>
                  <div class="controls">
                    <textarea class="span6" name='alamat' required>{{$user->alamat}}</textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Kode Pos:</label>
                  <div class="controls">
                    <input type="text"  class="input-xlarge" name='kodepos' value='{{$user->kodepos}}' required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    <span class="red">*</span>Telepon / HP:</label>
                  <div class="controls">
                    <input type="text" name='telp' value='{{$user->telp}}' required class="input-xlarge">
                  </div>
                </div>
              </fieldset>
            </div>
            <h3>Your Password</h3>
            <div class="registerbox">
              <fieldset>
              	<div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password Lama:</label>
                  <div class="controls">
                    <input type="password" name="oldpassword" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password Baru:</label>
                  <div class="controls">
                    <input type="password" name="password" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password Confirm::</label>
                  <div class="controls">
                    <input type="password" type="password" name="password_confirmation"  class="input-xlarge">
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="pull-right" style="float: right;">
            	<input type="Submit" class="submit" value="Update">
            </div>
          </form>
          <br>
          <h3>Your Personal Details</h3>
                </div>
                
            </div>
        </div>
    </section>
    
  <div style="clear:both; display:block; height:40px"></div>
</div><!--end:container-2-->


