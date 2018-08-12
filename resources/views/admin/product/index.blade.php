@extends('admin.template')

@section('content')
    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Data Produk</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                        {{--<button type="button" class="btn btn-success m-b-sm" data-toggle="modal"--}}
                        {{--data-target="">Tambah Kategori Baru--}}
                        {{--</button>--}}
                        <!-- Modal -->
                            <div class="table-responsive">
                                <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Penjual</th>
                                        <th>Status</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Gambar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td><a href="{{ url('admin/product/'. $product->id .'/edit') }}">{{ $product->name }}</a></td>
                                            <td><a href="{{ url('admin/category/'. $product->category->id .'/edit') }}">{{ $product->category->name }}</a></td>
                                            <td><a href="{{ url('admin/merchant/'. $product->merchant->id .'/edit') }}">{{ $product->merchant->name }}</a></td>
                                            @if($product->status == 1)
                                            <td> Aktif </td>
                                            @else
                                            <td> Non Aktif </td>
                                            @endif
                                            <td>{{ substr($product->description, 0, 40) }}</td>
                                            <td>Rp. {{ $product->price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>
                                                <img src="{{ asset("images/products/". $product->image) }}" width="30px;" height="30px;">
                                                {{--<a href="#" data-title="{{ $product->title }}" value="{{ action('AdminAuth\ProductController@showImage', ['id' => $product->id]) }}" class="btn btn-sm btn-info modalMd" data-id="{{ $product->id }}" data-toggle="modal" data-target="#modalMd">--}}
                                                    {{--<i id="img-btn" class="fa fa-eye"></i></a>--}}
                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div>
    </div><!-- Main Wrapper -->


    {{--<div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                    {{--<h4 class="modal-title" id="modalMdTitle"></h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="modalError"></div>--}}
                    {{--<div id="modalMdContent"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<script type="text/javascript">--}}

        {{--$(document).on('ajaxComplete ready', function () {--}}
            {{--$('.modalMd').off('click').on('click', function () {--}}
                {{--$('#modalMdContent').load($(this).attr('image'));--}}
                {{--$('#modalMdTitle').html($(this).data('title'));--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}

@endsection
