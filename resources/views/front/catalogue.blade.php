@extends('front.template')

@section('content')



    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        {{--<div class="breadcrumbs overlay-bg">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<div class="breadcrumbs-inner">--}}
                            {{--<h1 class="breadcrumbs-title">product grid view</h1>--}}
                            {{--<ul class="breadcrumb-list">--}}
                                {{--<li><a href="index.html">Home</a></li>--}}
                                {{--<li>product grid view</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <!-- BREADCRUMBS SETCTION END -->

    <!-- Start page content -->
    <div id="page-content" class="page-wrapper">

        <!-- SHOP SECTION START -->
        <div class="shop-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3 col-xs-12">
                        <div class="shop-content">
                            <!-- shop-option start -->
                            <div class="shop-option box-shadow mb-30 clearfix">
                                <!-- Nav tabs -->
                                <ul class="shop-tab f-left" role="tablist">
                                    <li class="active">
                                        <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                    </li>
                                    <li>
                                        <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                    </li>
                                </ul>
                                <!-- short-by -->
                                {{--<div class="short-by f-left text-center">--}}
                                    {{--<span>Sort by :</span>--}}
                                    {{--<select>--}}
                                        {{--<option value="volvo">Newest items</option>--}}
                                        {{--<option value="saab">Saab</option>--}}
                                        {{--<option value="mercedes">Mercedes</option>--}}
                                        {{--<option value="audi">Audi</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<!-- showing -->--}}
                                {{--<div class="showing f-right text-right">--}}
                                    {{--<span>Showing : 01-09 of 17.</span>--}}
                                {{--</div>--}}
                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class="tab-content">
                                <!-- grid-view -->
                                <div role="tabpanel" class="tab-pane active" id="grid-view">
                                    <div class="row">
                                        <!-- product-item start -->
                                        @foreach($products as $product)
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('product/' .$product->id) }}">
                                                        <img src="{{ asset('images/products/'.$product->image) }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="{{ url('product/' .$product->id) }}">{{ $product->name }} </a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h3 class="pro-price">Rp. {{ $product->price + ($product->price * $tax->tax/100) }}</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- product-item end -->
                                    </div>
                                </div>
                                <!-- list-view -->
                                <div role="tabpanel" class="tab-pane" id="list-view">
                                    <div class="row">
                                        <!-- product-item start -->
                                        @foreach($products as $product)
                                        <div class="col-md-12">
                                            <div class="shop-list product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('product/' .$product->id) }}">
                                                        <img src="{{ asset('images/products/'.$product->image) }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="clearfix">
                                                        <h6 class="product-title f-left">
                                                            <a href="{{ url('product/' .$product->id) }}">{{$product->name}}</a>
                                                        </h6>
                                                        <div class="pro-rating f-right">
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                    </div>
                                                    <h6 class="brand-name mb-30">{{$product->category->name}}</h6>
                                                    <h3 class="pro-price">{{$product->price}}</h3>
                                                    <p>{{$product->description}}.</p>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- product-item end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content end -->
                            <!-- shop-pagination start -->
                            {{--<ul class="shop-pagination box-shadow text-center ptblr-10-30">--}}
                                {{--<li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>--}}
                                {{--<li><a href="#">01</a></li>--}}
                                {{--<li><a href="#">02</a></li>--}}
                                {{--<li><a href="#">03</a></li>--}}
                                {{--<li><a href="#">...</a></li>--}}
                                {{--<li><a href="#">05</a></li>--}}
                                {{--<li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>--}}
                            {{--</ul>--}}
                            <!-- shop-pagination end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9 col-xs-12">
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
    </div>
    <!-- End page content -->
@endsection
