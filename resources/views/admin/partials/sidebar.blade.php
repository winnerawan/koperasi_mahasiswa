<!-- Page Sidebar -->
<div class="page-sidebar">
    <a class="logo-box" href="{{ url('admin/home') }}">
        <span>{{ config('app.name') }}</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="active-page">
                    <a href="{{ url('admin/home') }}">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Penjualan</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/sales') }}">Data Penjualan</a></li>
                        
                        <li><a href="{{ url('admin/profit') }}">Laba Koperasi</a></li>
<!--                         <li><a href="{{ url('admin/profit') }}">Laba Koperasi</a></li>
 -->                    </ul>
                </li>
                <li class="menu-divider"></li>

                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Kategori</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/category') }}">Data Kategori</a></li>
                        <li><a href="{{ url('admin/category/create') }}">Tambah Kategori</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-layers"></i><span>Produk</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/product') }}">Data Produk</a></li>
                        <li><a href="{{ url('admin/product/create') }}">Tambah Produk</a></li>
                    </ul>
                </li>
                <li class="menu-divider"></li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-user-check"></i><span>Penjual</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/merchant') }}">Data Penjual</a></li>
                        <li><a href="{{ url('admin/merchant/create') }}">Tambah Penjual</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-users"></i><span>Pelanggan</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/customer') }}">Data Pelanggan</a></li>
                        <li><a href="{{ url('admin/customer/create') }}">Tambah Pelanggan</a></li>
                    </ul>
                </li>
                <li class="menu-divider"></li>

                {{--<li>--}}
                    {{--<a href="javascript:void(0)">--}}
                        {{--<i class="menu-icon icon-show_chart"></i><span>Administrator</span><i class="accordion-icon fa fa-angle-left"></i>--}}
                    {{--</a>--}}
                    {{--<ul class="sub-menu">--}}
                        {{--<li><a href="{{ url('admin/admin') }}">Data Administrator</a></li>--}}
                        {{--<li><a href="{{ url('admin/admin/create') }}">Tambah Administrator</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-money_off"></i><span>Pembayaran</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/payment') }}">Data Pembayaran</a></li>
                        <li><a href="{{ url('admin/payment/create') }}">Tambah Pembayaran</a></li>
                    </ul>
                </li>
                {{--<li>--}}
                    {{--<a href="{{url('admin/admin')}}">--}}
                        {{--<i class="menu-icon icon-show_chart"></i><span>Administrator</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ url('admin/tax') }}">
                        <i class="menu-icon icon-star"></i><span>Pajak</span><i class="accordion-icon fa"></i>
                    </a>

                </li>
               <!--  <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-star"></i><span>Promo</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('admin/promo') }}">Data Promo</a></li>
                    </ul>
                </li> -->
                <li class="menu-divider"></li>
                {{--<li>--}}
                    {{--<a href="index.html">--}}
                        {{--<i class="menu-icon icon-help_outline"></i><span>Documentation</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ url('') }}">
                        <i class="menu-icon icon-public"></i><span>Halaman Depan</span>
                        {{--<span class="label label-danger">1.0</span>--}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- /Page Sidebar -->
