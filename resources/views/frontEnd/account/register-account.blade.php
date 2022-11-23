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


                <!--register area start-->
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="{{route('/save-register')}}" method="post">
                            @csrf
                            <p>
                                <label>Full Name  <span>*</span></label>
                                <input type="text" name="name" required>
                            </p>
                            <p>
                                <label>Phone Number  <span>*</span></label>
                                <input type="text" name="phone" required>
                            </p>
                            <p>
                                <label>House address<span>*</span></label>
                                <input type="text" name="address" required>
                            </p>
                            <p>
                                <label>Email Address <span></span></label>
                                <input type="email" name="email">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" required>
                            </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2"></div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
    @endsection
