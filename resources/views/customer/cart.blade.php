@extends('customer.template')

@section('content')
    <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
        {{--<p><a href="{{ url('') }}">Home</a> / Cart</p>--}}

        @if (sizeof(Cart::content()) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th class="column-spacer"></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>

                @foreach (Cart::content() as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>
                            <select class="quantity" name="quantity" id="quantity" data-id="{{ $item->rowId }}">
                                @for($i=1; $i<100; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </td>
                        <td>Rp. {{ $item->subtotal }}</td>
                        <td class=""></td>
                        <td>
                            <form action="{{ url('customer/cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>

                        </td>
                    </tr>

                @endforeach
                <tr>
                    <td class="table-image"></td>
                    <td></td>
                    <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                    <td>Rp. {{ Cart::instance('default')->subtotal() }}</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="border-bottom">
                    <td class="table-image"></td>
                    <td style="padding: 40px;"></td>
                    <td class="small-caps table-bg" style="text-align: right">Total</td>
                    <td class="table-bg">Rp. {{ Cart::total() }}</td>
                    <td class="column-spacer"></td>
                    <td></td>
                </tr>

                </tbody>
            </table>


             <tr class="border-bottom">
              <span>Pilih Metode Pembayaran</span><br>
              <select onchange="select_payment()" class="payment_ids" name="payment_ids" id="payment_ids">
               @foreach($payments as $payment)
                 <option value="{{ $payment->id }}" }}>{{ $payment->name }}</option>
               @endforeach
              </select>
            </tr>
                    <hr>
              <a href="{{ url('') }}" class="btn btn-primary btn-sm">Lanjutkan Belanja</a> &nbsp;
             <form action="{{ url('/customer/pay') }}" method="POST" style="margin-top: 10px;">
                    {{--<a href="" class="btn btn-success btn-lg">Bayar</a>--}}
                 {!! csrf_field() !!}
                 <input type="hidden" id="untung" name="untung" value="{{ $item->options->untung }}">
                 <input type="hidden" name="payment_id" class="payment_id" id="payment_id" value="1">
                 {{--<input type="hidden" name="merchant_id" class="merchant_id" id="merchant_id">--}}
                 <input type="submit" class="btn btn-info btn-sm" value="Bayar">
             </form>
             <form action="{{ url('/customer/emptyCart') }}" method="POST" style="margin-top: 10px;">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-sm" value="Kosongkan Keranjang">
             </form>

        @else

            <h3>Keranjang Belanja Kosong</h3>
            <a href="{{ url('') }}" class="btn btn-primary btn-lg">Lanjutkan Belanja</a>

        @endif

        <div class="spacer"></div>

    </div> <!-- end container -->


    @section('extra-script')

                <script type="text/javascript">
                    function select_payment(e) {
                        // var grand_total = 0;
                        // var shipping = $("#courier_id option:selected").text();
                        // var sub_total = $("#sub_total").text().replace(",","");
                        // var delivery =  $("#address").val() +", "+ $("#city option:selected").text() +", "+ $("#region option:selected").text() + ", "+$("#country option:selected").text() +", "+  document.getElementById("zip").value;
                        // grand_total = parseFloat(sub_total) + parseFloat(shipping);
                        // document.getElementById("shipping_price").innerHTML = $("#courier_id option:selected").value;
                        //
                        //
                        // document.getElementById("shipping_price").innerHTML = shipping;
                        // document.getElementById("grand_total").innerHTML = grand_total;
                        // var courier = $("#courier_id").val();
                        var payment = $("#payment_ids").val();
                        // // document.getElementById("total").innerHTML = grand_total;

                        $(document).ready(function () {
                            // $('input[name="total"]').val(grand_total);
                            // $('input[name="delivery"]').val(delivery);
                            // $('input[name="courier_id"]').val(courier);
                            $('input[name="payment_id"]').val(payment);

                        });
                        console.log(payment);
                    }
                </script>

                <script type="text/javascript">
                    (function(){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $('.quantity').on('change', function(e) {

                            var id = $(this).attr('data-id')
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: "PATCH",
                                url: '{{ url("customer/cart") }}' + '/' + id,
                                data: {
                                    'quantity': this.value,
                                },
                                success: function(data) {
                                    window.location.href = '{{ url('customer/cart') }}';
                                }
                            });
                        });
                    })();
                </script>
    @endsection
@endsection

