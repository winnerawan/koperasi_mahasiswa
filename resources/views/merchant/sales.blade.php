@extends('merchant.template')

@section('content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">Produk Terjual</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            {{--<h4 class="m-t-0 header-title"><b>Default Example</b></h4>--}}
                            {{--<p class="text-muted font-14 m-b-30">--}}
                            {{--DataTables has most features enabled by default, so all you need to do to use it with--}}
                            {{--your own tables is to call the construction function: <code>$().DataTable();</code>.--}}
                            {{--</p>--}}

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <a href="{{ url('merchant/product/'. $product->id .'/edit') }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ substr($product->description, 0, 40) }}</td>
                                        <td>Rp. {{ $product->price }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
    {{--<!-- Page Inner -->--}}
    {{--<div class="page-inner">--}}
    {{--<div class="page-title">--}}
    {{--<h3 class="breadcrumb-header">Data Produk</h3>--}}
    {{--</div>--}}
    {{--<div id="main-wrapper">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="panel panel-white">--}}
    {{--<div class="panel-body">--}}
    {{--<button type="button" class="btn btn-success m-b-sm" data-toggle="modal"--}}
    {{--data-target="">Tambah Kategori Baru--}}
    {{--</button>--}}
    {{--<!-- Modal -->--}}
    {{--<div class="table-responsive">--}}
    {{--<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>Nama Produk</th>--}}
    {{--<th>Kategori</th>--}}
    {{--<th>Penjual</th>--}}
    {{--<th>Deskripsi</th>--}}
    {{--<th>Harga</th>--}}

    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($products as $product)--}}
    {{--<tr>--}}
    {{--<td><a href="{{ url('admin/product/'. $product->id .'/edit') }}">{{ $product->name }}</a></td>--}}
    {{--<td><a href="{{ url('admin/category/'. $product->category->id .'/edit') }}">{{ $product->category->name }}</a></td>--}}
    {{--<td><a href="{{ url('admin/merchant/'. $product->merchant->id .'/edit') }}">{{ $product->merchant->name }}</a></td>--}}
    {{--<td>{{ substr($product->description, 0, 40) }}</td>--}}
    {{--<td>Rp. {{ $product->price }}</td>--}}

    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- Row -->--}}
    {{--</div>--}}
    {{--</div><!-- Main Wrapper -->--}}


@endsection
