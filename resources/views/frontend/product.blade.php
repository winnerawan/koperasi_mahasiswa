@extends('frontend.template')


@section('content')

<!-- Catalog -->
<section class="section-wrap pt-60 pb-30 catalog">
    <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
            <li>
                <a href="{{ url('') }}">Home</a>
            </li>
            <li class="active">
                Katalog
            </li>
        </ol>

        <div class="row">
            <div class="col-lg-9 order-lg-2 mb-40">

                <!-- Filter -->
                <div class="shop-filter">
                    <p class="woocommerce-result-count">
                        {{--Menampilkan: 1-12 dari 80 hasil--}}
                    </p>
                    {{--<span class="woocommerce-ordering-label">Sort by</span>--}}
                    {{--<form class="woocommerce-ordering">--}}
                        {{--<select>--}}
                            {{--<option value="default-sorting">Default Sorting</option>--}}
                            {{--<option value="price-low-to-high">Price: high to low</option>--}}
                            {{--<option value="price-high-to-low">Price: low to high</option>--}}
                            {{--<option value="by-popularity">By Popularity</option>--}}
                            {{--<option value="date">By Newness</option>--}}
                            {{--<option value="rating">By Rating</option>--}}
                        {{--</select>--}}
                    {{--</form>--}}
                </div>

                <div class="row row-6">
                    @foreach($products as $product)
                    <div class="col-md col-sm-6 product">
                        <div class="product__img-holder">
                            <a href="{{ url('product/' . $product->id) }}" class="product__link">
                                <img src="{{ asset("images/products/" .$product->image) }}" alt="" class="product__img">
                                <img src="{{ asset("images/products/" .$product->image) }}" alt="" class="product__img-back">
                            </a>
                            {{--<div class="product__actions">--}}
                                {{--<a href="#" class="product__quickview">--}}
                                    {{--<i class="ui-eye"></i>--}}
                                    {{--<span>Lihat</span>--}}
                                {{--</a>--}}
                                {{--<a href="#" class="product__add-to-wishlist">--}}
                                    {{--<i class="ui-heart"></i>--}}
                                    {{--<span>Ingin</span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        </div>

                        <div class="product__details">
                            <h3 class="product__title">
                                <a href="{{ url('product/' . $product->id) }}">{{ $product->name }}</a>
                            </h3>
                        </div>

                        <span class="product__price">
                  <ins>
                    <span class="amount">Rp. {{ $product->price }}</span>
                  </ins>
                </span>
                    </div> <!-- end product -->
                        @endforeach

                </div> <!-- end row -->

                {{--<!-- Pagination -->--}}
                {{--<div class="pagination clearfix">--}}
                    {{--<nav class="pagination__nav right clearfix">--}}
                        {{--<a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>--}}
                        {{--<span class="pagination__page pagination__page--current">1</span>--}}
                        {{--<a href="#" class="pagination__page">2</a>--}}
                        {{--<a href="#" class="pagination__page">3</a>--}}
                        {{--<a href="#" class="pagination__page">4</a>--}}
                        {{--<a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>--}}
                    {{--</nav>--}}
                {{--</div>--}}

            </div> <!-- end col -->


            <!-- Sidebar -->
            <aside class="col-lg-3 sidebar left-sidebar">

                <!-- Categories -->
                <div class="widget widget_categories widget--bottom-line">
                    <h4 class="widget-title">Kategori</h4>
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{url('katalog/'. $category->id)}}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </aside> <!-- end sidebar -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end catalog -->




@endsection
