<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ url('') }}" class="logo">
                        <span>
                            <img src="" alt="{{ config('app.name') }}" height="16">
                        </span>
                <i>
                    <img src="{{ asset("merchant/assets/images/logo_sm.png") }}" alt="" height="28">
                </i>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                <li class="dropdown notification-list hide-phone">
                                    </li>




                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="" alt="" class="rounded-circle"> <span class="ml-1">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a href="{{ url('/merchant/logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                            <i class="fi-power"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form"
                              action="{{ url('/merchant/logout') }}"
                              method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
               <!--  <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li> -->
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->
