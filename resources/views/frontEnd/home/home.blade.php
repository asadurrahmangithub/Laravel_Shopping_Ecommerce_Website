@extends('frontEnd.master')
@section('black')
    class="home_black_version"
    @endsection
@section('home-active')
    class="active"
    @endsection
@section('content')
    <!--slider area start-->
    <div class="slider_area slider_black slider_ten owl-carousel">

        @foreach($sliders as $slider)
        <div class="single_slider" data-bgimg="{{asset($slider->image)}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <p>{{$slider->offer_title}}</p>
                            <h1>{{$slider->product_name}}</h1>
                            <span>{{$slider->product_description}}</span>
                            <p class="slider_price">starting at <span>${{$slider->product_price}}.00</span></p>
                            <a class="button" href="#">shopping now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


{{--        <div class="single_slider" data-bgimg="{{asset('frontEnd')}}/assets/img/slider/slider7.jpg">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slider_content">--}}
{{--                            <p>exclusive offer -40% off this week</p>--}}
{{--                            <h1>breguet watches</h1>--}}
{{--                            <span>Made in a limited edition of 300 sets in the  </span>--}}
{{--                            <p class="slider_price">starting at <span>$2.199.oo</span></p>--}}
{{--                            <a class="button" href="shop.html">shopping now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="single_slider" data-bgimg="{{asset('frontEnd')}}/assets/img/slider/slider9.jpg">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slider_content">--}}
{{--                            <p>exclusive offer -10% off this week</p>--}}
{{--                            <h1>Raymond weil</h1>--}}
{{--                            <span>Raymond Weil’s emblematic collection, nabucco.</span>--}}
{{--                            <p class="slider_price">starting at <span>$2.199.oo</span></p>--}}
{{--                            <a class="button" href="shop.html">shopping now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!--slider area end-->

    <!--shipping area start-->
    <div class="shipping_area shipping_two s_black2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_1">

                        </div>
                        <div class="shipping_content">
                            <h3>Free Shipping</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_2">

                        </div>
                        <div class="shipping_content">
                            <h3>Money Return</h3>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_3">

                        </div>
                        <div class="shipping_content">
                            <h3>Member Discount</h3>
                            <p>Onevery order over $120.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_4">

                        </div>
                        <div class="shipping_content">
                            <h3>Online Support</h3>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping ar-->

    <!--product section area start-->
    <section class="product_section p_section1 product_black_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#arrivals" role="tab" aria-controls="arrivals" aria-selected="false">New Arrivals</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">Onsale</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">

                                        @foreach($products as $product)
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset($product->image)}}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset($product->image1)}}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">{{$product->category_name}},</a>
                                                        <a href="#">{{$product->sub_category_name}}</a>
                                                    </div>
                                                    <h3><a href="product-details.html">{{$product->product_name}}</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">${{$product->product_price}}.00</span>
                                                        <span class="current_price">${{$product->discount_price}}.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>{{$product->product_description}}</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart">
                                                                    <form action="{{ route('add-cart') }}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                        <input type="submit" class="btn btn-outline-warning" value="add to cart">
{{--                                                                        <button type="submit" title="add to cart">add to cart</button>--}}
                                                                    </form>

                                                                </li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Dummy animal</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Women</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$65.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Men,</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$60.00</span>--}}
{{--                                                        <span class="current_price">$55.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Women</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$80.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$50.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product33.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$62.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$70.00</span>--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product38.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">men</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$80.00</span>--}}
{{--                                                        <span class="current_price">$75.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product39.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">men</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Women</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="arrivals" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">

                                        @foreach($arrivals as $arrival)
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset($arrival->image)}}" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset($arrival->image1)}}" alt=""></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">{{$arrival->category_name}},</a>
{{--                                                            <a href="#">{{$arrival->sub_category_name}}</a>--}}
                                                        </div>
                                                        <h3><a href="product-details.html">{{$arrival->product_name}}</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">${{$arrival->product_price}}.00</span>
                                                            <span class="current_price">${{$arrival->discount_price}}.00</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>{{$arrival->product_description}}</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart">
                                                                        <form action="{{ route('add-cart') }}" method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                            <input type="submit" class="btn btn-outline-warning" value="add to cart">
                                                                            {{--                                                                        <button type="submit" title="add to cart">add to cart</button>--}}
                                                                        </form>

                                                                    </li>
                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Dummy animal</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Women</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product33.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Men,</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$89.00</span>--}}
{{--                                                        <span class="current_price">$75.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Women</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$75.00</span>--}}
{{--                                                        <span class="current_price">$70.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$89.00</span>--}}
{{--                                                        <span class="current_price">$75.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$70.00</span>--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">men</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$89.00</span>--}}
{{--                                                        <span class="current_price">$75.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">men</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="current_price">$55.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Clothing,</a>--}}
{{--                                                        <a href="#">Potato chips</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$89.00</span>--}}
{{--                                                        <span class="current_price">$75.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-col-5">--}}
{{--                                            <div class="single_product">--}}
{{--                                                <div class="product_thumb">--}}
{{--                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>--}}
{{--                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>--}}
{{--                                                    <div class="quick_button">--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_content">--}}
{{--                                                    <div class="tag_cate">--}}
{{--                                                        <a href="#">Women</a>--}}
{{--                                                    </div>--}}
{{--                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>--}}
{{--                                                    <div class="price_box">--}}
{{--                                                        <span class="old_price">$70.00</span>--}}
{{--                                                        <span class="current_price">$75.00</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_hover">--}}
{{--                                                        <div class="product_ratings">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="product_desc">--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="action_links">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="onsale" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product33.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$45.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product38.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product39.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$85.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--banner area start-->
    <section class="banner_section banner_black black_two">
        <div class="container">
            <div class="row ">

                @foreach($sliders as $slider)
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset($slider->image)}}" alt=""></a>
                            <div class="banner_content">
                                <p>Design Creative</p>
                                <h2>{{$slider->product_name}}</h2>
                                <span>From $60.99 – Sale 20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="single_banner">--}}
{{--                        <div class="banner_thumb">--}}
{{--                            <a href="shop.html"><img src="{{asset('frontEnd')}}/assets/img/bg/banner17.jpg" alt=""></a>--}}
{{--                            <div class="banner_content">--}}
{{--                                <p>Bestselling Products</p>--}}
{{--                                <h2>Top Sale Diamonds</h2>--}}
{{--                                <span>Only from $89.00</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section p_section1 product_black_section bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Bestselling Products</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_container bottom">
                            <div class="custom-row product_row1">

                                @foreach($products as $product)
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset($product->image)}}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset($product->image)}}" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">{{$product->category_name}},</a>
                                                <a href="#">{{$product->sub_category_name}}</a>
                                            </div>
                                            <h3><a href="product-details.html">{{$product->product_name}}</a></h3>
                                            <div class="price_box">
                                                <span class="old_price">${{$product->product_price}}.00</span>
                                                <span class="current_price">${{$product->discount_price}}.00</span>
                                            </div>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>{{$product->product_description}}</p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart">
                                                            <form action="{{ route('add-cart') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                <input type="submit" class="btn btn-outline-warning" value="add to cart">
                                                                {{--                                                                        <button type="submit" title="add to cart">add to cart</button>--}}
                                                            </form>

                                                        </li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Clothing,</a>--}}
{{--                                                <a href="#">Potato chips</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Dummy animal</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="current_price">$65.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Women</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="current_price">$65.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product33.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Men,</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$89.00</span>--}}
{{--                                                <span class="current_price">$75.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Women</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$75.00</span>--}}
{{--                                                <span class="current_price">$70.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Clothing,</a>--}}
{{--                                                <a href="#">Potato chips</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$89.00</span>--}}
{{--                                                <span class="current_price">$75.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Clothing,</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="current_price">$65.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Clothing,</a>--}}
{{--                                                <a href="#">Potato chips</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$70.00</span>--}}
{{--                                                <span class="current_price">$65.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">men</a>--}}
{{--                                                <a href="#">Potato chips</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$89.00</span>--}}
{{--                                                <span class="current_price">$75.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">men</a>--}}
{{--                                                <a href="#">Potato chips</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Natural Contrary</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="current_price">$55.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Clothing,</a>--}}
{{--                                                <a href="#">Potato chips</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Donec eu furniture</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$89.00</span>--}}
{{--                                                <span class="current_price">$75.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="custom-col-5">--}}
{{--                                    <div class="single_product">--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>--}}
{{--                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>--}}
{{--                                            <div class="quick_button">--}}
{{--                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product_content">--}}
{{--                                            <div class="tag_cate">--}}
{{--                                                <a href="#">Women</a>--}}
{{--                                            </div>--}}
{{--                                            <h3><a href="product-details.html">Duis pulvinar</a></h3>--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">$70.00</span>--}}
{{--                                                <span class="current_price">$75.00</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product_hover">--}}
{{--                                                <div class="product_ratings">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="action_links">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->
    @endsection
@section('modal')
    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="" alt=""></a>
                                            </div>
                                        </div>

{{--                                        <div class="tab-pane fade" id="tab2" role="tabpanel">--}}
{{--                                            <div class="modal_tab_img">--}}
{{--                                                <a href="#"><img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt=""></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="tab3" role="tabpanel">--}}
{{--                                            <div class="modal_tab_img">--}}
{{--                                                <a href="#"><img src="{{asset('frontEnd')}}/assets/img/product/product3.jpg" alt=""></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="tab4" role="tabpanel">--}}
{{--                                            <div class="modal_tab_img">--}}
{{--                                                <a href="#"><img src="{{asset('frontEnd')}}/assets/img/product/product5.jpg" alt=""></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('frontEnd')}}/assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('frontEnd')}}/assets/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('frontEnd')}}/assets/img/product/product5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec eu furniture</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="see_all">
                                        <a href="product-details.html">See all features</a>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area start-->
@endsection
