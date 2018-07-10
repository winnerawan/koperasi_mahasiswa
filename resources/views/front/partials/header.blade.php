<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper">
        <!-- header-top-bar -->
        <div class="header-top-bar plr-185">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="call-us">
                            <p class="mb-0 roboto">{{ config('app.telp') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-link clearfix">
                            <ul class="link f-right">
                                <li>
                                    <a href="{{ url('customer/home') }}">
                                        <i class="zmdi zmdi-account"></i>
                                        Akun Saya
                                    </a>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="wishlist.html">--}}
                                        {{--<i class="zmdi zmdi-favorite"></i>--}}
                                        {{--Wish List (0)--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{ url('customer/login') }}">
                                        <i class="zmdi zmdi-lock"></i>
                                        Masuk
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('') }}">
                                    <img src="{{ asset("frontend/img/logo/logo.png") }}" alt="main logo">
                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li><a href="{{ url('') }}">Home</a>
                                    </li>

                                    {{--<li><a href="#">Halaman</a>--}}
                                        {{--<ul class="dropdwn">--}}
                                            {{--<li>--}}
                                                {{--<a href="{{ url('tos') }}">Syarat Penggunaan</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="{{ url('privacy') }}">Kebijakan Privasi</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{url('about')}}">Tentang Kami</a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="{{url('contact')}}">Kontak</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{url('merchant/login')}}">Penjual</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/login')}}">Administrator</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                {{--<div class="header-search f-left">--}}
                                    {{--<div class="header-search-inner">--}}
                                        {{--<button class="search-toggle">--}}
                                            {{--<i class="zmdi zmdi-search"></i>--}}
                                        {{--</button>--}}
                                        {{--<form action="#">--}}
                                            {{--<div class="top-search-box">--}}
                                                {{--<input type="text" placeholder="Search here your product...">--}}
                                                {{--<button type="submit">--}}
                                                    {{--<i class="zmdi zmdi-search"></i>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                </div>
                                <!-- total-cart -->
                                {{--<div class="total-cart f-left">--}}
                                    {{--<div class="total-cart-in">--}}
                                        {{--<div class="cart-toggler">--}}
                                            {{--<a href="#">--}}
                                                {{--<span class="cart-quantity">02</span><br>--}}
                                                {{--<span class="cart-icon">--}}
                                                        {{--<i class="zmdi zmdi-shopping-cart-plus"></i>--}}
                                                    {{--</span>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<div class="top-cart-inner your-cart">--}}
                                                    {{--<h5 class="text-capitalize">Your Cart</h5>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="total-cart-pro">--}}
                                                    {{--<!-- single-cart -->--}}
                                                    {{--<div class="single-cart clearfix">--}}
                                                        {{--<div class="cart-img f-left">--}}
                                                            {{--<a href="#">--}}
                                                                {{--<img src="img/cart/1.jpg" alt="Cart Product" />--}}
                                                            {{--</a>--}}
                                                            {{--<div class="del-icon">--}}
                                                                {{--<a href="#">--}}
                                                                    {{--<i class="zmdi zmdi-close"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="cart-info f-left">--}}
                                                            {{--<h6 class="text-capitalize">--}}
                                                                {{--<a href="#">Dummy Product Name</a>--}}
                                                            {{--</h6>--}}
                                                            {{--<p>--}}
                                                                {{--<span>Brand <strong>:</strong></span>Brand Name--}}
                                                            {{--</p>--}}
                                                            {{--<p>--}}
                                                                {{--<span>Model <strong>:</strong></span>Grand s2--}}
                                                            {{--</p>--}}
                                                            {{--<p>--}}
                                                                {{--<span>Color <strong>:</strong></span>Black, White--}}
                                                            {{--</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<!-- single-cart -->--}}
                                                    {{--<div class="single-cart clearfix">--}}
                                                        {{--<div class="cart-img f-left">--}}
                                                            {{--<a href="#">--}}
                                                                {{--<img src="img/cart/1.jpg" alt="Cart Product" />--}}
                                                            {{--</a>--}}
                                                            {{--<div class="del-icon">--}}
                                                                {{--<a href="#">--}}
                                                                    {{--<i class="zmdi zmdi-close"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="cart-info f-left">--}}
                                                            {{--<h6 class="text-capitalize">--}}
                                                                {{--<a href="#">Dummy Product Name</a>--}}
                                                            {{--</h6>--}}
                                                            {{--<p>--}}
                                                                {{--<span>Brand <strong>:</strong></span>Brand Name--}}
                                                            {{--</p>--}}
                                                            {{--<p>--}}
                                                                {{--<span>Model <strong>:</strong></span>Grand s2--}}
                                                            {{--</p>--}}
                                                            {{--<p>--}}
                                                                {{--<span>Color <strong>:</strong></span>Black, White--}}
                                                            {{--</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="top-cart-inner subtotal">--}}
                                                    {{--<h4 class="text-uppercase g-font-2">--}}
                                                        {{--Total  =--}}
                                                        {{--<span>$ 500.00</span>--}}
                                                    {{--</h4>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="top-cart-inner view-cart">--}}
                                                    {{--<h4 class="text-uppercase">--}}
                                                        {{--<a href="#">View cart</a>--}}
                                                    {{--</h4>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<div class="top-cart-inner check-out">--}}
                                                    {{--<h4 class="text-uppercase">--}}
                                                        {{--<a href="#">Check out</a>--}}
                                                    {{--</h4>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->
