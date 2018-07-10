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


@endsection
