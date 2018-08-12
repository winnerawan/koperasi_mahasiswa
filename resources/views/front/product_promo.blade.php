@extends('front.template')

@section('content')

    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        <div class=" -bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <ul class="breadcrumb-list">
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li>{{ $product->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS SETCTION END -->
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <!-- single-product-area start -->
                        <div class="single-product-area mb-80">
                            <div class="row">
                                <!-- imgs-zoom-area start -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="imgs-zoom-area">
                                        <img id="zoom_03" src="{{ asset("images/products/" .$product->image) }}" data-zoom-image="{{ asset("images/products/" .$product->image) }}" alt="">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                    <div class="p-c">
                                                        <a href="#" data-image="img/product/2.jpg" data-zoom-image="img/product/2.jpg">
                                                            <img class="zoom_03" src="{{ asset("images/products/" .$product->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="p-c">
                                                        <a href="#" data-image="img/product/3.jpg" data-zoom-image="img/product/3.jpg">
                                                            <img class="zoom_03" src="{{ asset("images/products/" .$product->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="p-c">
                                                        <a href="#" data-image="img/product/4.jpg" data-zoom-image="img/product/4.jpg">
                                                            <img class="zoom_03" src="{{ asset("images/products/" .$product->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="p-c">
                                                        <a href="#" data-image="img/product/5.jpg" data-zoom-image="img/product/5.jpg">
                                                            <img class="zoom_03" src="{{ asset("images/products/" .$product->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="p-c">
                                                        <a href="#" data-image="img/product/6.jpg" data-zoom-image="img/product/6.jpg">
                                                            <img class="zoom_03" src="{{ asset("images/products/" .$product->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="p-c">
                                                        <a href="#" data-image="img/product/7.jpg" data-zoom-image="img/product/7.jpg">
                                                            <img class="zoom_03" src="{{ asset("images/products/" .$product->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- imgs-zoom-area end -->
                                <!-- single-product-info start -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="single-product-info">
                                        {!! Form::open(['route' => 'customer.cart.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                        <h3 class="text-black-1">{{ $product->name }} </h3>
                                        <input type="hidden" id="pro_id" name="pro_id" value="{{ $product->id }}">
                                        <input type="hidden" id="pro_name" name="pro_name" value="{{ $product->name }}">
                                        <h6 class="brand-name-2">{{ $product->category->name }}</h6>
                                        <!-- hr -->
                                        <hr>
                                        <!-- single-product-tab -->
                                        <div class="single-product-tab">
                                            <ul class="reviews-tab mb-20">
                                                <li  class="active"><a href="#description" data-toggle="tab">deskripsi</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <p>{{ $product->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product-tab">
                                            <ul class="reviews-tab mb-20">
                                                <li  class="active"><a href="#description" data-toggle="tab">stok</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <p>{{ $product->quantity }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  hr -->
                                        <hr>
                                        <!-- single-pro-color-rating -->
                                        <h3 class="pro-price">Harga: Rp. {{ $product->price  }}</h3>
                                        <input type="hidden" id="pro_price" name="pro_price" value="{{ $product->price }}">
                                        <input type="hidden" id="untung" name="untung" value="0">
                                        <!-- hr -->
                                        <hr>
                                        <!-- plus-minus-pro-action -->
                                        <div class="plus-minus-pro-action">
                                            <div class="sin-plus-minus f-left clearfix">
                                                <p class="color-title f-left" id="qty">Qty</p>
                                                <div class="cart-plus-minus f-left">
                                                    <input type="text" value="01" name="qty" id="qty" class="cart-plus-minus-box">
                                                </div>
                                            </div>
                                            <!-- <div class="sin-pro-action f-right">
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                        </div>
                                        <hr>
                                        <!--  hr -->
                                        <hr>
                                        <div>
                                            @if($product->quantity>0)
                                            <button type="submit" class="btn-success btn-lg button extra-small button-black" tabindex="-1">
                                                <span class="text-uppercase">Beli</span>
                                            </button>
                                            @else

                                            @endif
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-info end -->
                            </div>
                        </div>
                        <!-- single-product-area end -->
                        <div class="related-product-area">

                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <!-- widget-search -->
                        {{--<aside class="widget-search mb-30">--}}
                            {{--<form action="#">--}}
                                {{--<input type="text" placeholder="Search here...">--}}
                                {{--<button type="submit"><i class="zmdi zmdi-search"></i></button>--}}
                            {{--</form>--}}
                        {{--</aside>--}}
                        <!-- widget-categories -->
                        <aside class="widget widget-categories box-shadow mb-30">
                            <h6 class="widget-title border-left mb-20">Kategori</h6>
                            <div id="cat-treeview" class="product-cat">
                                <ul>
                                    @foreach($categories as $category)
                                    <li class="closed"><a href="{{ url('catalogue/' . $category->id)}}">{{ $category->name }}</a>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </section>
    <!-- End page content -->
@endsection
