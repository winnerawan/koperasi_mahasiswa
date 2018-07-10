@extends('admin.template')

@section('content')
    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Data Penjualan</h3>
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
                                        <th>Produk</th>
                                        <th>Jumlah</th>
                                        <th>Harga Penjual</th>
                                        <th>Sub Total</th>
                                        <th>Harga Jual</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sales_detail as $sale)
                                        <tr>
                                            <td>{{ $sale->product->name }}</td>
                                            <td>{{ $sale->qty }}</td>
                                            {{--<td><a href="{{ url('admin/category/'. $product->category->id .'/edit') }}">{{ $product->category->name }}</a></td>--}}
                                            {{--<td><a href="{{ url('admin/merchant/'. $product->merchant->id .'/edit') }}">{{ $product->merchant->name }}</a></td>--}}
                                            {{--<td>{{ substr($product->description, 0, 40) }}</td>--}}
                                            <td>Rp. {{ $sale->product->price }}</td>
                                            <td>Rp. {{ $sale->product->price * $sale->qty }}</td>
                                            <td>Rp. {{ $sale->product->price + ($sale->product->price * $tax->tax/100) }}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div>
    </div><!-- Main Wrapper -->


@endsection
