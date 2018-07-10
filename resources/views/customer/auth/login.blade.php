
@extends('front.template')

@section('content')


    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="registered-customers">
                        <h6 class="widget-title border-left mb-50">Pelanggan Terdaftar</h6>
                        <form role="form" method="POST" action="{{ url('/customer/login') }}">
                            {{ csrf_field() }}
                            <div class="login-account p-30 box-shadow">
                                <p>Jika Anda memiliki akun, silakan masuk.</p>
                                <input type="text" name="email" placeholder="Alamat Email">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <input type="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <p><small><a href="{{ url('/customer/password/reset') }}">Lupa password?</a></small></p>
                                <button class="submit-btn-1 btn-hover-1" type="submit">masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- new-customers -->
                <div class="col-md-6">
                    <div class="new-customers">
                        <form role="form" method="POST" action="{{ url('/customer/register') }}">
                            {{ csrf_field() }}
                            <h6 class="widget-title border-left mb-50">Pelanggan Baru</h6>
                            <div class="login-account p-30 box-shadow">
                                <input type="text" name="name" placeholder="Nama...">
                                <input type="text" name="email" placeholder="Alamat Email...">
                                <input type="password" name="password" placeholder="Password">
                                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">

                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Register</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->

    </div>
    <!-- End page content -->
@endsection



                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password">--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}

