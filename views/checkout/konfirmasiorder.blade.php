	<div style="clear:both; display:block; height:20px"></div>
	<div id="intro">
		<h3><a href="#">{{trans('content.step5.confirm_btn')}} &nbsp;</a></h3>
	</div>
	<div class="container-2">
		<div style="clear:both; display:block; height:40px"></div>
		<div class="table-responsive">
			<table class="shopping-cart">
				<tr>
					<th class="image">ID Order</th>
					<th class="name">Tanggal Order</th>
					<th class="model">Detail Order</th>
					<th class="quantity">Jumlah</th>
					<th class="quantity">Jumlah yg belum di bayar </th>
					<th class="price">No. Resi</th>
					<th class="total">Status</th>
					<!-- <th class="action">Action</th> -->
				</tr>

				<tr>
					<td class="image">{{prefixOrder().$order->kodeOrder}}</td>
					<td  class="name">{{waktu($order->tanggalOrder)}}</td>
					<td class="model">
						<ul>
							@foreach ($order->detailorder as $detail)
							<li style="margin-left: 8px">{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
							@endforeach
						</ul>
					</td>
					<td class="quantity">{{ price($order->total)}}</td>
					<td class="quantity">{{($order->status==2 || $order->status==3) ? price(0) : price($order->total)}}</td>
					<td class="price">{{ $order->noResi}}</td>
					<td class="total">
						@if($order->status==0)
						<span class="label label-warning">Pending</span>
						@elseif($order->status==1)
						<span class="label label-important">Konfirmasi diterima</span>
						@elseif($order->status==2)
						<span class="label label-info">Pembayaran diterima</span>
						@elseif($order->status==3)
						<span class="label label-success">Terkirim</span>
						@elseif($order->status==4)
						<span class="label label-default">Batal</span>
						@endif
					</td>
				</tr>
			</table>
		</div>
			
		@if($paymentinfo!=null)
			<h3><center>Paypal Payment Details</center></h3>
			<hr>
			<table class='table table-bordered'>
				<tr>
					<td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
				</tr>
				<tr>
					<td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
				</tr>
				<tr>
					<td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
				</tr>
				<tr>
					<td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
				</tr>
				<tr>
					<td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
				</tr>
				<tr>
					<td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
				</tr>
				<tr>
					<td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
				</tr>
			</table>
			<p>Thanks you for your order.</p>
		@endif	

		@if($order->jenisPembayaran==1)
			<h3><center>{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</center></h3>
			{{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put', 'class'=> 'form-register'))}}	
				<div class="registerbox">
					<fieldset>
						<div class="control-group">
							<label class="control-label"> Nama Pengirim:</label>
							<div class="controls">
								<input type="text" name="nama" value="{{Input::old('nama')}}" required class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label  class="control-label"> No Rekening:</label>
							<div class="controls">
								<input type="text" name="noRekPengirim" value="{{Input::old('noRekPengirim')}}" required class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<label for="select01" class="control-label">
							Rekening Tujuan:</label>
							<div class="controls">
								<select name="bank" class="span3">
									<option value="">-- Pilih Bank Tujuan --</option>
									@foreach ($banktrans as $bank)
									<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="control-group">
							<label  class="control-label"> Jumlah:</label>
							<div class="controls">
								<input type="text" name="jumlah" value="{{$order->total}}" required class="input-xlarge">
							</div>
						</div>
					</fieldset>
				</div>
				<div class="pull-right" style="float:right">
					&nbsp;
					<input type="Submit" class="submit" value="{{trans('content.step5.confirm_btn')}}">
					<div style="clear:both; display:block; height:40px"></div>
				</div>
			{{Form::close()}}
		@endif

		@if($order->jenisPembayaran==2)
			<center>
				<h2><b>{{trans('content.step5.confirm_btn')}} Paypal</b></h2><hr>
				<p>{{trans('content.step5.paypal')}}</p>
			</center><br>
			<center id="paypal">{{$paypalbutton}}</center>
			<br>
		@elseif($order->jenisPembayaran==4) 
			@if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
			<center>
				<h2><b>{{trans('content.step5.confirm_btn')}} iPaymu</b></h2><hr>
				<p>{{trans('content.step5.ipaymu')}}</p><br>
				<a class="btn-pay" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
			</center>
			<br>
			@endif
		@elseif($order->jenisPembayaran==5 && $order->status == 0)
			<center>
				<h2><b>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</b></h2><hr>
				<p>{{trans('content.step5.doku')}}</p><br>
				{{ $doku_button }}
			</center>
			<br>
		@elseif($order->jenisPembayaran == 6 && $order->status == 0)
			<center>
				<h2><b>{{trans('content.step5.confirm_btn')}} Bitcoin</b></h2><hr>
				<p>{{trans('content.step5.bitcoin')}}</p><br>
				{{$bitcoinbutton}}
			</center>
			<br>
		@elseif($order->jenisPembayaran == 8 && $order->status == 0)
			<center>
				<h2><b>{{trans('content.step5.confirm_btn')}} Veritrans</b></h2><hr>
				<p>{{trans('content.step5.veritrans')}}</p><br>
				<button class="btn-pay" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
			</center>
			<br>
		@endif
	</div><!--end:container-2-->