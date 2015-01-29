<div id="demo-header">
<a id="cart-link" href="#cart" title="Cart">{{Shpcart::wishlist()->total_items()}} Items </a>
<div id="cart-panel">
<div class="item-cart">
<table>
<tbody>
@if (Shpcart::wishlist()->contents())
@foreach (Shpcart::wishlist()->contents() as $key => $cart)
<tr>
<td class="image"><a href="#"><img width="60" height="60" src="{{URL::to(getPrefixDomain().'/produk/'.$cart['image'])}}" alt="product" title="product"></a></td>
<td class="name"><a href="#">{{$cart['name']}}</a></td>
<td class="quantity">{{ $cart['qty']}}</td>
</tr>
@endforeach
@endif
</tbody>
</table>
<table>
<tbody>
<tr>
<td class="textright"><b>Total:</b></td>
<td class="textright">{{ Shpcart::wishlist()->total_items() }}</td>
</tr>
</tbody>
</table>
<div class="buttoncart">
<a href="{{URL::to('checkout')}}">Checkout</a>
</div>
</div>
</div>
</div><!-- /demoheader	-->