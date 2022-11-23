@extends('frontEnd.master')
@section('product-active')
    class="active"
@endsection
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area product_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li><a href="shop.html">shop</a></li>
                            <li>></li>
                            <li>product sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details product_sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <div class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Clothing</a> </li>
                                <li><a href="#"> Men</a> </li>
                                <li><a href="#">Women</a> </li>

                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="#">
                                <div id="slider-range"></div>
                                <input type="text" name="text" id="amount" />
                                <button type="submit">Filter</button>


                            </form>
                        </div>


                        <div class="widget_list widget_brands">
                            <h2>Brands</h2>
                            <ul>
                                <li><a href="#">SamSung</a> <span>(1)</span> </li>
                            </ul>
                        </div>
                        <div class="widget_list widget_color">
                            <h2>Color</h2>
                            <ul>
                                <li><a href="#">Gold </a> <span>(4)</span></li>
                                <li><a href="#"> Green </a> <span>(6)</span></li>
                                <li><a href="#">White </a> <span>(10)</span></li>

                            </ul>
                        </div>
                        <div class="widget_list tag-cloud">
                            <h2>Tags</h2>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">asian</a></li>
                                    <li><a href="#">brown</a></li>
                                    <li><a href="#">euro</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">france</a></li>
                                    <li><a href="#">hat</a></li>
                                    <li><a href="#">t-shirt</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">white</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget_list compare_p">
                            <h2>Compare Products</h2>
                            <div class="compare_item">
                                <div class="compare_img">
                                    <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product.jpg" alt=""></a>
                                </div>
                                <div class="compare_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="compare_item ">
                                <div class="compare_img">
                                    <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product2.jpg" alt=""></a>
                                </div>
                                <div class="compare_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="compare_btn">
                                <a href="#">compare<i class="ion-checkmark-round"></i></a>
                            </div>
                        </div>
                        <div class="widget_list Featured_p">
                            <h2>Featured Products</h2>
                            <div class="Featured_item">
                                <div class="Featured_img">
                                    <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product5.jpg" alt=""></a>
                                </div>
                                <div class="Featured_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="Featured_item">
                                <div class="Featured_img">
                                    <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product6.jpg" alt=""></a>
                                </div>
                                <div class="Featured_info">
                                    <h3><a href="#">Donec eu furniture</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="Featured_item bottom">
                                <div class="Featured_img">
                                    <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product2.jpg" alt=""></a>
                                </div>
                                <div class="Featured_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="product_right_sidebar">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="product-details-tab">

                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                            <img id="zoom1" src="{{asset('frontEnd')}}/assets/img/product/product1-big.jpg" data-zoom-image="{{asset('frontEnd')}}/assets/img/product/product1-big.jpg" alt="big-1">
                                        </a>
                                    </div>

                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('frontEnd')}}/assets/img/product/product2-big.jpg" data-zoom-image="{{asset('frontEnd')}}/assets/img/product/product2-big.jpg">
                                                    <img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                            <li >
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('frontEnd')}}/assets/img/product/product1-big.jpg" data-zoom-image="{{asset('frontEnd')}}/assets/img/product/product1-big.jpg">
                                                    <img src="{{asset('frontEnd')}}/assets/img/product/product13.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                            <li >
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('frontEnd')}}/assets/img/product/product3-big.jpg" data-zoom-image="{{asset('frontEnd')}}/assets/img/product/product3-big.jpg">
                                                    <img src="{{asset('frontEnd')}}/assets/img/product/product4.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                            <li >
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('frontEnd')}}/assets/img/product/product2-big.jpg" data-zoom-image="{{asset('frontEnd')}}/assets/img/product/product2-big.jpg">
                                                    <img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt="zo-th-1"/>
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product_d_right">
                                    <form action="#">

                                        <h1>Donec eu furniture</h1>
                                        <div class="product_nav">
                                            <ul>
                                                <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"> (customer review ) </a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">$70.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                                        </div>

                                        <div class="product_variant quantity">
                                            <label>quantity</label>
                                            <input min="1" max="100" value="1" type="number">
                                            <button class="button" type="submit">add to cart</button>

                                        </div>
                                        <div class=" product_d_action">
                                            <ul>
                                                <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                                <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                            </ul>
                                        </div>
                                        <div class="product_meta">
                                            <span>Category: <a href="#">Clothing</a></span>
                                        </div>

                                    </form>
                                    <div class="priduct_social">
                                        <ul>
                                            <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" title="google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product info start-->
                    <div class="product_d_info">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li >
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">More info</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Data sheet</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                    <div class="product_info_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                    <div class="reviews_wrapper">
                                        <h2>1 review for Donec eu furniture</h2>
                                        <div class="reviews_comment_box">
                                            <div class="comment_thmb">
                                                <img src="{{asset('frontEnd')}}/assets/img/blog/comment2.jpg" alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="star_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p><strong>admin </strong>- September 12, 2018</p>
                                                    <span>roadthemes</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="comment_title">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published.  Required fields are marked </p>
                                        </div>
                                        <div class="product_ratting mb-10">
                                            <h3>Your rating</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_review_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment" id="review_comment" ></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author"  type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email"  type="text">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product info end-->

                    <!--product section area start-->
                    <section class="product_section  p_section1 related_product">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_title">
                                    <h2>Related products</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product_area ">
                                    <div class="product_container bottom">
                                        <div class="custom-row product_row2">
                                            @foreach($products as $product)
                                            <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                            <a href="#">Potato chips</a>
                                                        </div>
                                                        <h3><a href="product-details.html">{{$product->product_name}}</a></h3>
                                                        <span class="old_price">${{$product->product_price}}.00</span>
                                                        <span class="current_price">${{$product->discount_price}}.00</span>
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
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product1.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Clothing,</a>--}}
{{--                                                            <a href="#">Potato chips</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Dummy animal</a></h3>--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product10.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product11.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Women</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product12.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product13.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Men,</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$70.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product15.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product14.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Women</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product16.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product11.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Clothing,</a>--}}
{{--                                                            <a href="#">Potato chips</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>--}}
{{--                                                        <span class="current_price">$65.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product5.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product6.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Clothing,</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Furniture</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product16.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product15.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Clothing,</a>--}}
{{--                                                            <a href="#">Potato chips</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Letraset animal</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product8.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product3.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">men</a>--}}
{{--                                                            <a href="#">Potato chips</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Aliquam furniture</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product10.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product12.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">men</a>--}}
{{--                                                            <a href="#">Potato chips</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Natural Contrary</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$60.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product3.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product5.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Clothing,</a>--}}
{{--                                                            <a href="#">Potato chips</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Donec eu furniture</a></h3>--}}
{{--                                                        <span class="current_price">$62.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="custom-col-5">--}}
{{--                                                <div class="single_product">--}}
{{--                                                    <div class="product_thumb">--}}
{{--                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product16.jpg" alt=""></a>--}}
{{--                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product5.jpg" alt=""></a>--}}
{{--                                                        <div class="quick_button">--}}
{{--                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="product_content">--}}
{{--                                                        <div class="tag_cate">--}}
{{--                                                            <a href="#">Women</a>--}}
{{--                                                        </div>--}}
{{--                                                        <h3><a href="product-details.html">Duis pulvinar</a></h3>--}}
{{--                                                        <span class="old_price">$86.00</span>--}}
{{--                                                        <span class="current_price">$70.00</span>--}}
{{--                                                        <div class="product_hover">--}}
{{--                                                            <div class="product_ratings">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="product_desc">--}}
{{--                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="action_links">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>--}}
{{--                                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>--}}
{{--                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--product section area end-->

                    <!--product section area start-->
                    <section class="product_section  p_section1 ">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_title">
                                    <h2>Upsell products</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product_area ">
                                    <div class="product_container bottom">
                                        <div class="custom-row product_row2">
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product1.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt=""></a>
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
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product3.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product4.jpg" alt=""></a>
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
                                                        <span class="current_price">$65.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product5.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product6.jpg" alt=""></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Women</a>
                                                        </div>
                                                        <h3><a href="product-details.html">Furniture</a></h3>
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product7.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product8.jpg" alt=""></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Men,</a>
                                                        </div>
                                                        <h3><a href="product-details.html">Letraset animal</a></h3>
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$70.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product9.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product10.jpg" alt=""></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Women</a>
                                                        </div>
                                                        <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product11.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product12.jpg" alt=""></a>
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
                                                        <span class="current_price">$65.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product12.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product13.jpg" alt=""></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Clothing,</a>
                                                        </div>
                                                        <h3><a href="product-details.html">Furniture</a></h3>
                                                        <span class="old_price">$86.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product14.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product15.jpg" alt=""></a>
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
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product17.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product18.jpg" alt=""></a>
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
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product19.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product20.jpg" alt=""></a>
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
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product2.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product3.jpg" alt=""></a>
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
                                                        <span class="current_price">$62.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product4.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product6.jpg" alt=""></a>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Women</a>
                                                        </div>
                                                        <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$70.00</span>
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
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
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
                    </section>
                    <!--product section area end-->

                </div>

            </div>
        </div>
    </div>
    <!--product details end-->
    @endsection
