@extends('frontend.template')

@section('content')


    <!-- Single Product -->
    <section class="section-wrap pb-20 product-single">
        <div class="container">

            <!-- Breadcrumbs -->
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('') }}">Produk</a>
                </li>
                <li class="active">
                    {{ $product->name }}
                </li>
            </ol>

            <div class="row">

                <div class="col-md-6 product-slider mb-50">

                    <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

                        <div class="gallery-cell">
                            <a href="{{ asset('images/products/' .$product->image ) }}" class="lightbox-img">
                                <img src="{{ asset('images/products/' .$product->image ) }}" alt="" />
                            </a>
                        </div>

                    </div> <!-- end gallery main -->


                </div> <!-- end col img slider -->

                <div class="col-md-6 product-single">
                    <h1 class="product-single__title uppercase">{{ $product->name }}</h1>

                    <span class="product-single__price">
              <ins>
                <span class="amount">Rp. {{ $product->price }}</span>
              </ins>

            </span>


                    <div class="size-quantity clearfix">
                        <div class="quantity">
                            <label>Quantity</label>
                            <select name="quantity" id="quantity__select" class="quantity__select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="row row-10 product-single__actions clearfix">
                        <div class="col">
                            <a href="#" class="btn btn-lg btn-color product-single__add-to-cart">
                                <i class="ui-bag"></i>
                                <span>Add to Cart</span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-lg btn-dark product-single__add-to-wishlist">
                                <i class="ui-heart"></i>
                                <span>Wishlist</span>
                            </a>
                        </div>
                    </div>

                    <div class="product_meta">
                        <ul>
                            <li>
                                <span class="product-code">Penjual: <span>{{ $product->merchant->name }}</span></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion mb-50" id="accordion">
                        <div class="accordion__panel">
                            <div class="accordion__heading" id="headingOne">
                                <a data-toggle="collapse" href="#collapseOne" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapseOne">Deskripsi<span class="accordion__toggle">&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
                                <div class="accordion__body">
                                    {{ $product->description }}
                                </div>
                            </div>
                        </div>


                                </div>
                            </div>
                        </div>
                    </div> <!-- end accordion -->

                </div> <!-- end col product description -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </section> <!-- end single product -->


@endsection
