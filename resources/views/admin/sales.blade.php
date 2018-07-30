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
                                        <th>Tanggal</th>
                                        <th>Pelanggan</th>
                                        <th>Total Belanja</th>
                                        <th>Nota</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sales as $sale)
                                        <tr>
                                            <td><a href="{{ url('admin/sales_detail/'. $sale->id) }}">{{ $sale->created_at }}</a></td>
                                            <td>{{ $sale->customer->name }}</td>
                                            <td>{{ $sale->total_price }}</td>
                                            <td><a href="{{ url('admin/generateNota/'.$sale->id) }}">{{ $sale->id }}</a> </td>
                                            {{--<td>{{ $od->product->price }}</td>--}}
                                            {{--@foreach($sales->order_detail as $od)--}}
                                            {{--<td>$o</td>--}}
                                            {{--@endforeach--}}

                                            {{--<td><a href="{{ url('admin/category/'. $product->category->id .'/edit') }}">{{ $product->category->name }}</a></td>--}}
                                            {{--<td><a href="{{ url('admin/merchant/'. $product->merchant->id .'/edit') }}">{{ $product->merchant->name }}</a></td>--}}
                                            {{--<td>{{ substr($product->description, 0, 40) }}</td>--}}
                                            {{--<td>Rp. {{ $product->price }}</td>--}}

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
