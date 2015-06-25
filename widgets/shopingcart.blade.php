<div id="demo-header">
	<a id="cart-link" title="Cart">{{Shpcart::cart()->total_items()}} Items - {{ price(Shpcart::cart()->total() )}}</a>
	<div id="cart-panel">
		<div class="item-cart">
			<table>
				<tbody>
					@foreach (Shpcart::cart()->contents() as $key => $cart)
					<tr>
						<td class="image">
							<a href="{{URL::to('produk/'.Str::slug($cart['name']))}}">
								<img width="60" height="60" src="{{URL::to(product_image_url($cart['image']))}}" alt="product" title="product">
							</a>
						</td>
						<td class="name"><a href="{{URL::to('produk/'.Str::slug($cart['name']))}}">{{$cart['name']}}</a></td>
						<td class="quantity">{{ $cart['qty']}}</td>
						<td class="total">{{price($cart['price'])}}</td>
						<td class="remove-item">
							<a href="javascript:deletecart({{ "'".$cart['rowid']."'" }})"><i class="icon-remove"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<table>
				<tbody>
					<tr>
						<td class="textright"><b>Total:</b></td>
						<td class="textright">{{ price(Shpcart::cart()->total() )}}</td>
					</tr>
				</tbody>
			</table>
			<div class="buttoncart">
				<a href="{{URL::to('checkout')}}">Checkout</a>
			</div>
		</div>
	</div>
</div><!-- /demoheader	-->