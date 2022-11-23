@extends('frontEnd.master')
@section('cart-active')
    class="active"
@endsection
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Shopping Cart</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
{{--            <form action="#">--}}
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    @if($carts != null)
                                    <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $cartSub = 0; @endphp
                                    @foreach($carts as $cart)
                                    <tr>
                                        <td class="product_remove"><a href="{{ route('delete-cart',['id'=>$cart->rowId]) }}"><i class="fa fa-trash-o"></i></a></td>
                                        <td class="product_thumb"><a href="#"><img src="{{ $cart->image }}" alt=""></a></td>
                                        <td class="product_name"><a href="#">{{ $cart->name }}</a></td>
                                        <td class="product-price">{{ $cart->price }}</td>
                                        <td class="product_quantity">
                                            <?php $cartSub += $cart->price*$cart->qty ?>
                                            <form action="{{ route('update-cart') }}" method="post">
                                                @csrf

                                                <input type="number" name="qty" value="{{ $cart->qty }}">
                                                <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                                <input type="submit" value="submit">
                                            </form>
                                        </td>
                                        <td class="product_total">{{ $cart->qty*$cart->price }}</td>

                                    </tr>

                                    @endforeach
                                    @else
                                    @endif

{{--                                    <tr>--}}
{{--                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>--}}
{{--                                        <td class="product_thumb"><a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product2.jpg" alt=""></a></td>--}}
{{--                                        <td class="product_name"><a href="#">Handbags justo</a></td>--}}
{{--                                        <td class="product-price">£90.00</td>--}}
{{--                                        <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>--}}
{{--                                        <td class="product_total">£180.00</td>--}}


{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>--}}
{{--                                        <td class="product_thumb"><a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product5.jpg" alt=""></a></td>--}}
{{--                                        <td class="product_name"><a href="#">Handbag elit</a></td>--}}
{{--                                        <td class="product-price">£80.00</td>--}}
{{--                                        <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>--}}
{{--                                        <td class="product_total">£160.00</td>--}}


{{--                                    </tr>--}}

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @if($cartSub != null)
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">{{ Cart::subtotal() }}</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> 30.00 Tk</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">{{$cartSub+30}}.00 Tk</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="{{route('/checkout')}}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount">00.00</p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart_amount"><span>Flat Rate:</span> 00.00 Tk</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">00.00 Tk</p>
                                        </div>
                                        <div class="checkout_btn">

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
{{--            </form>--}}
        </div>
    </div>
    <!--shopping cart area end -->

    @endsection
