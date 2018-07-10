@extends('admin.template')

@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Dashboard</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">Rp. {{ $tp }}</span>
                                <p class="stats-info">Pendapatan</p>
                            </div>
                            {{--<div class="pull-right">--}}
                                {{--<i class="icon-arrow_upward stats-icon"></i>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $merchants->count() }}</span>
                                <p class="stats-info">Penjual</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-user-check stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $customers->count() }}</span>
                                <p class="stats-info">Pelanggan</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-users stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $products->count() }}</span>
                                <p class="stats-info">Produk</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-stack stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">Rp. {{ $p }}</span>
                                <p class="stats-info">Keuntungan</p>
                            </div>

                        </div>
                    </div>
                </div> -->
            </div><!-- Row -->
            <div class="row">
                {{--<div class="col-lg-8 col-md-12">--}}
                    {{--<div class="panel panel-white">--}}
                        {{--<div class="panel-heading clearfix">--}}
                            {{--<h4 class="panel-title">Total Pendapatan</h4>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div id="chart1"><svg></svg></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-lg-4 col-md-12">
                    {{--<div class="panel panel-white">--}}
                        {{--<div class="panel-heading clearfix">--}}
                            {{--<h4 class="panel-title">Server Status</h4>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="container-fluid">--}}
                                {{--<div class="server-load row">--}}
                                    {{--<div class="server-stat col-sm-4">--}}
                                        {{--<p>167GB</p>--}}
                                        {{--<span>Usage</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="server-stat col-sm-4">--}}
                                        {{--<p>320GB</p>--}}
                                        {{--<span>Space</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="server-stat col-sm-4">--}}
                                        {{--<p>57.4%</p>--}}
                                        {{--<span>CPU</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="chart2"><svg></svg></div>--}}
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- /Page Content -->
    </div><!-- /Page Container -->

@endsection
