@extends('front.template')

@section('content')

    @include('front.partials.slider')

    <!-- UP COMMING PRODUCT SECTION START -->
    <div class="up-comming-product-section mb-80">
        <div class="container">
            <div class="row">
                <!-- up-comming-pro -->
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="up-comming-pro gray-bg clearfix">
                        <div class="up-comming-pro-img f-left">
                            <a href="{{ url('product/' .$promos[0]->product->id) }}">
                                <img src="{{ asset("images/products/" .$promos[0]->product->image) }}" alt="">
                            </a>
                        </div>
                        <div class="up-comming-pro-info f-left">
                            <h3>{{ $promos[0]->promo }} - <a href="{{ url('product/' .$promos[0]->product->id) }}">{{ $promos[0]->product->name }}</a></h3>
                            <p>{{ $promos[0]->product->description }}</p>
                            {{--<div class="up-comming-time">--}}
                            {{--<div data-countdown="2017/01/15"></div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="banner-item banner-1">
                        <div class="ribbon-price">
                            <span>{{ $promos[1]->product->price }}</span>
                        </div>
                        <div class="banner-img">
                            <a href="{{ url('product/' .$promos[1]->product->id) }}"><img src="{{ asset("images/products/" .$promos[1]->product->image) }}" alt=""></a>
                        </div>
                        <div class="banner-info">
                            <h3><font color="#FF7F00"><strong> {{ $promos[1]->promo }} <br/><a href="{{ url('product/' .$promos[1]->product->id) }}">{{ $promos[1]->product->name }}</a></strong></font></h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- UP COMMING PRODUCT SECTION END -->
    <!-- Feature -->

    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section section-bg-tb pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title text-left mb-40">
                        <h1 class="uppercase">produk list</h1>
                        <h6>Produk berdasarkan semua kategori,</h6>
                    </div>
                </div>

            </div>
            <div class="product-tab">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- popular-product start -->
                    <div class="tab-pane active" id="popular-product">
                        <div class="row">
                            <!-- product-item start -->
                            @foreach($products as $product)
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('product/' .$product->id) }}">
                                            <img src="{{ asset("images/products/" . $product->image) }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('product/' .$product->id) }}">{{ $product->name }}</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <!-- <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a> -->
                                        </div>
                                        <h3 class="pro-price">Rp. {{ $product->price + ($product->price * $tax->tax/100) }}</h3>
                                        <ul class="action-button">
                                            {{--<li>--}}
                                                {{--<a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>--}}
                                            {{--</li>--}}
                                            <!-- <li>
                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li> -->
                                            {{--<li>--}}
                                                {{--<a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>--}}
                                            {{--</li>--}}
                                            <!-- <li>
                                                <a href="" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- product-item end -->
                        </div>
                    </div>
                    <!-- popular-product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->

    <!-- START FOOTER AREA -->
    <footer id="footer" class="footer-area">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="plr-185">
                    <div class="footer-top-inner theme-bg">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-4">
                                <div class="single-footer footer-about">
                                    <div class="footer-logo">
                                        <img src="{{ asset("frontend/img/logo/logo.png") }}" alt="">
                                    </div>
                                    <div class="footer-brief">
                                        <p>Koperasi Mahasiswa (KOPMA) adalah salah satu Unit Minat Bakat (UMB) yang ada di Universitas PGRI Madiun. Salah satu KOPMA yang ada pada Universitas PGRI Madiun adalah KOPMA Fakultas Teknik Prodi Teknik Informatika. KOPMA Teknik Informatika berada pada Lantai 3 kampus 3 Universitas PGRI Madiun. Kehadiran KOPMA sebagai wahana untuk latihan berwirausaha bagi mahasiswa.</p>
                                    </div>
                                   <!--  <ul class="footer-social">
                                        <li>
                                            <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                        </li> -->
                                        <!-- <li>
                                            <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 hidden-md hidden-sm">
                                <div class="single-footer">
                                    <h4 class="footer-title border-left">Kategori</h4>
                                    <ul class="footer-menu">
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="{{ url('catalogue/'.$category->id) }}"><i class="zmdi zmdi-circle"></i><span>{{$category->name}}</span></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4">
                                <div class="single-footer">
                                    <h4 class="footer-title border-left">Akun saya</h4>
                                    <ul class="footer-menu">
                                        <li>
                                            <a href="{{ url('customer/home') }}"><i class="zmdi zmdi-circle"></i><span>Akun saya</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/login') }}"><i class="zmdi zmdi-circle"></i><span>Login</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/cart') }}"><i class="zmdi zmdi-circle"></i><span>Keranjang</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/home') }}"><i class="zmdi zmdi-circle"></i><span>History Pembelian</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom black-bg">
            <div class="container-fluid">
                <div class="plr-185">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="copyright-text">
                                    <p>&copy; <a href="{{ url('') }}" target="_blank">{{ config('app.name') }}</a> 2018. All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <ul class="footer-payment text-right">
                                    <li>
                                        <a href="#"><img src="img/payment/1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment/2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment/3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/payment/4.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER AREA -->

@endsection
