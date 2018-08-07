@extends('admin.template')


@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Laporan</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Laporan Penjualan</label>
                                <div class="col-sm-6">
                                    <select style="margin-bottom: 20px;" class="form-control report" name="report" id="report">
                                        @foreach($dates as $date => $value)
                                            <option value="{{ $date }}" data-id="{{ $date }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br/>

                            {{--<div class="form-group">--}}
                                {{--<label class="col-sm-2 control-label"><br/></label>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label class="col-sm-4 control-label" >Laporan Penjual</label>
                                <div class="col-sm-6">
                                    <select class="form-control report" name="report_merchant" id="report_merchant">
                                        <option value="0" data-id="0">--pilih penjual--</option>
                                    @foreach($merchants as $merchant)
                                            <option value="{{ $merchant->id }}" data-id="{{ $merchant->id }}">{{ $merchant->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{--<button type="submit" onclick="report_today()" class="btn btn-success">Cetak</button>--}}


                            {{--<div class="table-responsive">--}}
                                {{--<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th>Tanggal</th>--}}
                                        {{--<th>Pelanggan</th>--}}
                                        {{--<th>Total Belanja</th>--}}
                                        {{--<th>Nota</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--@foreach( as $sale)--}}
                                        {{--<tr>--}}
                                            {{--<td><a href="{{ url('admin/sales_detail/'. $sale->id) }}">{{ $sale->created_at }}</a></td>--}}
                                            {{--<td>{{ $sale->customer->name }}</td>--}}
                                            {{--<td>{{ $sale->total_price }}</td>--}}
                                            {{--<td><a href="{{ url('admin/invoice/'.$sale->id) }}">{{ $sale->id }}</a> </td>--}}
                                            {{--<td>{{ $od->product->price }}</td>--}}
                                            {{--@foreach($sales->order_detail as $od)--}}
                                            {{--<td>$o</td>--}}
                                            {{--@endforeach--}}

                                            {{--<td><a href="{{ url('admin/category/'. $product->category->id .'/edit') }}">{{ $product->category->name }}</a></td>--}}
                                            {{--<td><a href="{{ url('admin/merchant/'. $product->merchant->id .'/edit') }}">{{ $product->merchant->name }}</a></td>--}}
                                            {{--<td>{{ substr($product->description, 0, 40) }}</td>--}}
                                            {{--<td>Rp. {{ $product->price }}</td>--}}

                                        {{--</tr>--}}
                                    {{--@endforeach--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-script')
    {{--<script type="text/javascript">--}}
        {{--function get_report(e) {--}}
            {{--$('#report').change(function(){--}}
                {{--// alert($(this).val());--}}
                {{--jQuery("#report option:first-child").attr("selected", true);--}}
                {{--var urlmenu = document.getElementById( 'report' );--}}
                {{--console.log(urlmenu);--}}

                {{--if (urlmenu  == 1) {--}}
                    {{--window.open('http://localhost:8000/admin/report_today', '_self');--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}

        {{--function report_today() {--}}


        {{--}--}}
    {{--</script>--}}

    <script type="text/javascript">
        var url = document.getElementById('report');
        url.onchange = function() {
            console.log(url.value);
            if (url.value == 1) {
            window.open('http://localhost:8000/admin/report_today', '_blank');
            } else if (url.value == 2) {
            window.open('http://localhost:8000/admin/report_weekly', '_blank');
            } else if (url.value == 3) {
            window.open('http://localhost:8000/admin/report_monthly', '_blank');
            } else if (url.value == 4) {
            window.open('http://localhost:8000/admin/report_yearly', '_blank');
            }
        }
    </script>
    {{--<script type="text/javascript">--}}
        {{--function report() {--}}
            {{--var url = document.getElementById('report');--}}
            {{--urlmenu.onchange = function() {--}}
                {{--console.log(url.value)--}}
                {{--if (url.value == 1) {--}}
                    {{--window.open('http://localhost:8000/admin/report_today', '_blank');--}}
                {{--} else if (urlmenu.value == 2) {--}}
                    {{--window.open('http://localhost:8000/admin/report_weekly', '_blank');--}}
                {{--} else if (urlmenu.value == 3) {--}}
                    {{--window.open('http://localhost:8000/admin/report_monthly', '_blank');--}}
                {{--} else if (urlmenu.value == 4) {--}}
                    {{--window.open('http://localhost:8000/admin/report_yearly', '_blank');--}}
                {{--}--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}

    <script type="text/javascript">
        var urlmenu = document.getElementById('report_merchant');
        urlmenu.onchange = function() {
            console.log(urlmenu.value);
                window.open('http://localhost:8000/admin/report_merchant/'+urlmenu.value, '_blank');

        }
    </script>

@endsection
