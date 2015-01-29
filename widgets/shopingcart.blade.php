<div id="demo-header">
<a id="cart-link" href="#cart" title="Cart">{{Shpcart::cart()->total_items()}} Items - {{ jadiRupiah(Shpcart::cart()->total() )}}</a>
<div id="cart-panel">
<div class="item-cart">
<table>
<tbody>
@foreach (Shpcart::cart()->contents() as $key => $cart)
<tr>
<td class="image"><a href="#"><img width="60" height="60" src="{{URL::to(getPrefixDomain().'/produk/'.$cart['image'])}}" alt="product" title="product"></a></td>
<td class="name"><a href="#">{{$cart['name']}}</a></td>
<td class="quantity">{{ $cart['qty']}}</td>
<td class="total">{{jadiRupiah($cart['price'])}}</td>
<td class="remove"><i class="icon-remove"></i></td>
</tr>
@endforeach
</tbody>
</table>
<table>
<tbody>
<tr>
<td class="textright"><b>Total:</b></td>
<td class="textright">{{ jadiRupiah(Shpcart::cart()->total() )}}</td>
</tr>
</tbody>
</table>
<div class="buttoncart">
<a href="{{URL::to('checkout')}}">Checkout</a>
</div>
</div>
</div>
</div><!-- /demoheader	-->
