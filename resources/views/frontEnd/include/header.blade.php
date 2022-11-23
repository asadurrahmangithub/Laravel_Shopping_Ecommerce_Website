<div class="home_black_version">
    <div class="Offcanvas_menu offcanvas_ten">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="welcome_text">
                        </div>

                        <div class="top_right text-right">
                            <ul>
                                <li class="language"><a href="{{route('/login-account')}}"> Login <i class="ion-chevron-down"></i></a>

                                </li>
                                <li class="currency"><a href="{{route('/register-account')}}">Register <i class="ion-chevron-down"></i></a>

                                </li>
                                <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="home_contact">
                            <div class="contact_box">
                                <label>Location</label>
                                <p>Your address goes here.</p>
                            </div>
                            <div class="contact_box">
                                <label>Call free</label>
                                <p><a href="tel:0123456789">0123456789</a></p>

                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active"><a href="#">Home</a></li>
                                <li class="menu-item-has-children"><a href="#">Shop</a></li>
                                <li class="menu-item-has-children"><a href="#">blog</a></li>
                                <li class="menu-item-has-children"><a href="#">pages </a></li>
                                <li class="menu-item-has-children"><a href="my-account.html">my account</a></li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->

    <!--header area start-->
    <header class="header_area header_black header_ten">
        <!--header top start-->
        <div class="header_top header_top9">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                                @if(Session::get('customerId'))
                                    <li><a href=""> {{Session::get('customerName')}}<i></i></a></li>
                                    <li><a href="{{route('/customer-logout')}}">Logout<i></i></a></li>

                                @else
                                    <li><a href="{{route('/login-account')}}"> Login <i></i></a></li>
                                    <li><a href="{{route('/register-account')}}">Register <i></i></a></li>

                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middel header_middle9">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('frontEnd')}}/assets/img/logo/shopping.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-7 col-6">
                        <div class="middel_right">
                            <div class="search_container_new">
                                <form action="#">
                                    <div class="hover_category">
                                        <select class="select_option" name="select" id="categori9">
                                            <option selected value="1">All Categories</option>
                                            @foreach($categories as $category)
                                            <option value="2">{{$category->category_name}}</option>
                                            @endforeach
                                            @foreach($subCategories as $subCategory)
                                            <option value="20">{{$subCategory->sub_category_name}}</option>
                                            @endforeach
{{--                                            <option value="3">Accessories & More</option>--}}
{{--                                            <option value="4">Butters & Eggs</option>--}}
{{--                                            <option value="5">Camera & Video </option>--}}
{{--                                            <option value="6">Mornitors</option>--}}
{{--                                            <option value="7">Tablets</option>--}}
{{--                                            <option value="8">Laptops</option>--}}
{{--                                            <option value="9">Handbags</option>--}}
{{--                                            <option value="10">Headphone & Speaker</option>--}}
{{--                                            <option value="11">Herbs & botanicals</option>--}}
{{--                                            <option value="12">Vegetables</option>--}}
{{--                                            <option value="13">Shop</option>--}}
{{--                                            <option value="14">Laptops & Desktops</option>--}}
{{--                                            <option value="15">Watchs</option>--}}
{{--                                            <option value="16">Electronic</option>--}}
                                        </select>
                                    </div>
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_rightinfo_new">
                                <div class="box_setting">
                                    <a href="#"><i class="ion-gear-b"></i></a>
                                    <div class="dropdown_setting">
                                        <ul>
                                            <li><a href="{{route('/checkout')}}">Checkout </a></li>
                                            <li><a href="{{route('/login-account')}}">Login</a></li>
                                            <li><a href="{{route('/register-account')}}">Register</a></li>
{{--                                            <li><a href="wishlist.html">Wishlist</a></li>--}}
                                        </ul>

                                    </div>
                                </div>
                                <div class="cart_link">
                                    <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity"> $138.00</span> <i class="fa fa-angle-down"></i></a>
                                    <span class="cart_quantity">2</span>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>cart</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Letraset animal</a>

                                                <span class="quantity">Qty: 1</span>
                                                <span class="price_cart">$60.00</span>

                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Natural passages</a>
                                                <span class="quantity">Qty: 1</span>
                                                <span class="price_cart">$69.00</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span>138.00</span>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button view_cart">
                                                <a href="cart.html">View cart</a>
                                            </div>
                                            <div class="cart_button checkout">
                                                <a class="active" href="checkout.html">Checkout</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom header_bottom9  sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="categories_menu categories_ten">
                            <div class="categories_title">
                                <h2 class="categori_toggle">ALL CATEGORIES</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>

                                    @foreach($categories as $category)
                                    <li class="menu_item_children"><a href="#">{{$category->category_name}}<i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li class="menu_item_children"><a href="#">{{$category->category_name}}</a>
                                                <ul class="categorie_sub_menu">
                                                    @foreach($subCategories as $subCategory)
                                                    <li><a href="#">{{$subCategory->sub_category_name}}</a></li>
                                                    @endforeach
{{--                                                    <li><a href="#">Evening</a></li>--}}
{{--                                                    <li><a href="#">Day</a></li>--}}
{{--                                                    <li><a href="#">Sports</a></li>--}}
                                                </ul>
                                            </li>
{{--                                            <li class="menu_item_children"><a href="#">Handbags</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Shoulder</a></li>--}}
{{--                                                    <li><a href="#">Satchels</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">coats</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu_item_children"><a href="#">shoes</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Ankle Boots</a></li>--}}
{{--                                                    <li><a href="#">Clog sandals </a></li>--}}
{{--                                                    <li><a href="#">run</a></li>--}}
{{--                                                    <li><a href="#">Books</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu_item_children"><a href="#">Clothing</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Coats  Jackets </a></li>--}}
{{--                                                    <li><a href="#">Raincoats</a></li>--}}
{{--                                                    <li><a href="#">Jackets</a></li>--}}
{{--                                                    <li><a href="#">T-shirts</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </li>
                                    @endforeach
{{--                                    <li class="menu_item_children"><a href="#"> Wheels & Tires  <i class="fa fa-angle-right"></i></a>--}}
{{--                                        <ul class="categories_mega_menu column_3">--}}
{{--                                            <li class="menu_item_children"><a href="#">Chair</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Dining room</a></li>--}}
{{--                                                    <li><a href="#">bedroom</a></li>--}}
{{--                                                    <li><a href="#"> Home & Office</a></li>--}}
{{--                                                    <li><a href="#">living room</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu_item_children"><a href="#">Lighting</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Ceiling Lighting</a></li>--}}
{{--                                                    <li><a href="#">Wall Lighting</a></li>--}}
{{--                                                    <li><a href="#">Outdoor Lighting</a></li>--}}
{{--                                                    <li><a href="#">Smart Lighting</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu_item_children"><a href="#">Sofa</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Fabric Sofas</a></li>--}}
{{--                                                    <li><a href="#">Leather Sofas</a></li>--}}
{{--                                                    <li><a href="#">Corner Sofas</a></li>--}}
{{--                                                    <li><a href="#">Sofa Beds</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu_item_children"><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>--}}
{{--                                        <ul class="categories_mega_menu column_2">--}}
{{--                                            <li class="menu_item_children"><a href="#">Brake Tools</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Driveshafts</a></li>--}}
{{--                                                    <li><a href="#">Spools</a></li>--}}
{{--                                                    <li><a href="#">Diesel </a></li>--}}
{{--                                                    <li><a href="#">Gasoline</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu_item_children"><a href="#">Emergency Brake</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Dolls for Girls</a></li>--}}
{{--                                                    <li><a href="#">Girls' Learning Toys</a></li>--}}
{{--                                                    <li><a href="#">Arts and Crafts for Girls</a></li>--}}
{{--                                                    <li><a href="#">Video Games for Girls</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="menu_item_children"><a href="#"> Turbo System <i class="fa fa-angle-right"></i></a>--}}
{{--                                        <ul class="categories_mega_menu column_2">--}}
{{--                                            <li class="menu_item_children"><a href="#">Check Trousers</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Building</a></li>--}}
{{--                                                    <li><a href="#">Electronics</a></li>--}}
{{--                                                    <li><a href="#">action figures </a></li>--}}
{{--                                                    <li><a href="#">specialty & boutique toy</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="menu_item_children"><a href="#">Calculators</a>--}}
{{--                                                <ul class="categorie_sub_menu">--}}
{{--                                                    <li><a href="#">Dolls for Girls</a></li>--}}
{{--                                                    <li><a href="#">Girls' Learning Toys</a></li>--}}
{{--                                                    <li><a href="#">Arts and Crafts for Girls</a></li>--}}
{{--                                                    <li><a href="#">Video Games for Girls</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#"> Lighting</a></li>--}}
{{--                                    <li><a href="#"> Accessories</a></li>--}}
{{--                                    <li><a href="#">Body Parts</a></li>--}}
{{--                                    <li><a href="#">Perfomance Filters</a></li>--}}
{{--                                    <li><a href="#"> Engine Parts</a></li>--}}
{{--                                    <li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>--}}
{{--                                    <li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>--}}
                                    <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main_menu_inner main_menu9_inner">
                            <div class="logo_sticky">
                                <a href="index.html"><img src="{{asset('frontEnd')}}/assets/img/logo/shopping1.png" alt=""></a>
                            </div>
                            <div class="main_menu">
                                <nav>
                                    <ul>

                                        <li @yield('home-active')><a href="{{route('/')}}">Home <i></i></a></li>
                                        <li @yield('shop-active')><a href="{{route('/shop')}}">shop <i></i></a></li>
                                        <li @yield('product-active')><a href="{{route('/product-details')}}">product details<i></i></a></li>
                                        <li @yield('cart-active')><a href="{{route('/cart')}}">cart</a></li>
                                        <li @yield('checkout-active')><a href="{{route('/checkout')}}">checkout <i></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->

</div>

