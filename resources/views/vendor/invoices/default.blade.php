<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $invoice->name }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            h1,h2,h3,h4,p,span,div { font-family: DejaVu Sans; }
        </style>
    </head>
    <body>
        <div style="clear:both; position:relative;">
            <div style="position:absolute; left:0pt; width:250pt;">
                <img class="img-rounded" height="{{ $invoice->logo_height }}" src="{{ $invoice->logo }}">
            </div>
            <div style="margin-left:100pt;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $invoice->business_details->get('name') }}<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $invoice->business_details->get('id') }}<br/>
                {{ $invoice->business_details->get('location') }}<br/>
            </div>
            <div style="margin-left:300pt; margin-top: 10px;">
                <b>Hari,Tanggal: </b> {{ $invoice->date->formatLocalized('%A %d %B %Y') }}<br />
                @if ($invoice->number)
                    <b>No Nota: </b> {{ $invoice->number }}
                @endif
                <br />
            </div>
        </div>
        <!-- <br />
        <h2>{{ $invoice->name }} {{ $invoice->number ? '#' . $invoice->number : '' }}</h2>
 -->        <div style="clear:both; position:relative;">
            {{--<div style="position:absolute; left:0pt; width:250pt;">--}}
                {{--<h4>Business Details:</h4>--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-body">--}}
                        {{--{!! $invoice->business_details->count() == 0 ? '<i>No business details</i><br />' : '' !!}--}}
                        {{--{{ $invoice->business_details->get('name') }}<br />--}}
                        {{--ID: {{ $invoice->business_details->get('id') }}<br />--}}
                        {{--{{ $invoice->business_details->get('phone') }}<br />--}}
                        {{--{{ $invoice->business_details->get('location') }}<br />--}}
                        {{--{{ $invoice->business_details->get('zip') }} {{ $invoice->business_details->get('city') }}--}}
                        {{--{{ $invoice->business_details->get('country') }}<br />--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div style="margin-left: 300pt;">
                <h4>Pelanggan:</h4>
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! $invoice->customer_details->count() == 0 ? '<i>No customer details</i><br />' : '' !!}
                        {{ $invoice->customer_details->get('name') }}<br />
                    </div>
                </div>
            </div>
        </div>
        <h4>Barang:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->get('name') }}</td>
                        <td>{{ $invoice->formatCurrency()->symbol }} {{ $item->get('price') }}</td>
                        <td>{{ $item->get('ammount') }}</td>
                        <td>{{ $invoice->formatCurrency()->symbol }} {{ $item->get('totalPrice') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="clear:both; position:relative;">
            @if($invoice->notes)
                <div style="position:absolute; left:0pt; width:250pt;">
                    <h4>Keterangan:</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{ $invoice->notes }}
                        </div>
                    </div>
                </div>
            @endif
            <div style="margin-left: 300pt;">
                <h4>Total:</h4>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><b>Subtotal</b></td>
                            <td>{{ $invoice->formatCurrency()->symbol }} {{ $invoice->subTotalPriceFormatted() }}</td>
                        </tr>
                       <!--  <tr>
                            <td>
                                <b>
                                    PPN {{ $invoice->tax_type == 'percentage' ? '(' . $invoice->tax . '%)' : '' }}
                                </b>
                            </td>
                            <td>{{ $invoice->formatCurrency()->symbol }} {{ $invoice->taxPriceFormatted() }}</td>
                        </tr> -->
                        <tr>
                            <td><b>TOTAL</b></td>
                            <td><b>{{ $invoice->formatCurrency()->symbol }} {{ $invoice->totalPriceFormatted() }}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if ($invoice->footnote)
            <br /><br />
            <div class="well">
                {{ $invoice->footnote }}
            </div>
        @endif
    </body>
</html>
