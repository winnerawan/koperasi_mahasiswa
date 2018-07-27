<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">HALLO</li>
                {{--<li>--}}
                    {{--<a href="{{ url('merchant/home') }}">--}}
                        {{--<i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right"></span> <span> Dashboard </span>--}}
                    {{--</a>--}}
                {{--</li>--}}


                <li>
                   <a href="{{url('/merchant/sales')}}"><i class="fi-layout"></i><span> Info </span></a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-box"></i><span> Produk </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('merchant/product') }}">Data Produk</a></li>
                        <li><a href="{{ url('merchant/product/create') }}">Tambah Produk</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{url('/merchant/sales')}}"><i class="fi-layout"></i><span> Penjualan </span></a>
                </li>

                <li>
                    <a href="{{url('/merchant/income')}}"><i class="fi-bar-graph-2"></i><span> Pendapatan </span></a>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
