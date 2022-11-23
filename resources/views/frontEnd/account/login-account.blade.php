@extends('frontEnd.master')
@section('account-active')
    class="active"
@endsection
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My account</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="{{route('/check-login')}}" method="post">
                            @csrf
                            <p>
                                <label>PhoneNumber or email <span>*</span></label>
                                <input type="text" name="user_name" required>
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" required>
                            </p>
                            <div class="login_submit">
                                <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3"></div>
                <!--login area start-->

            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection
