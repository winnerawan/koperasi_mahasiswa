@extends('frontend.template')


@section('content')

    <!-- Feature -->
    <section class="section-wrap pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 feature">
                    <i class="ui-cube feature__icon"></i>
                    <div class="feature__holder">
                        <h6 class="feature__title">{{ $promos[0]->title }}</h6>
                        <span class="feature__text">{{ $promos[0]->text }}</span>
                    </div>
                </div>
                <div class="col-md-3 feature">
                    <i class="ui-plane feature__icon"></i>
                    <div class="feature__holder">
                        <h6 class="feature__title">{{ $promos[1]->title }}</h6>
                        <span class="feature__text">{{ $promos[1]->text }}</span>
                    </div>
                </div>
                <div class="col-md-3 feature">
                    <i class="ui-pricetag feature__icon"></i>
                    <div class="feature__holder">
                        <h6 class="feature__title">{{ $promos[2]->title }}</h6>
                        <span class="feature__text">{{ $promos[2]->text }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Seller -->
    <section class="section-wrap pb-30">
        <div class="container">

            <div class="heading-row">
                <div class="text-center">
                    <h2 class="heading bottom-line">
                        Produk
                    </h2>
                </div>
            </div>

            <div class="row row-8">

                @foreach($products as $product)
                <div class="col-lg-2 col-sm-4 product">
                    <div class="product__img-holder">
                        <a href="{{ url('product/' . $product->id) }}" class="product__link" aria-label="Product">
                            <img src="{{ asset("images/products/". $product->image) }}" alt="" class="product__img">
                            {{--<img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">--}}
                        </a>
                        {{--<div class="product__actions">--}}
                            {{--<a href="quickview.html" class="product__quickview">--}}
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
                            <a href="single-product.html">{{ $product->name }}</a>
                        </h3>
                    </div>

                    <span class="product__price">
              <ins>
                <span class="amount">Rp. {{ $product->price }}</span>
              </ins>
              <del>
                {{--<span>$27.00</span>--}}
              </del>
            </span>
                </div> <!-- end product -->
                    @endforeach

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end best seller -->

@endsection

