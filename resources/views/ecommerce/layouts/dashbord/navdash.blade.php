<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ route('tableau_bord') }}"><img src="{{ asset('dashbord/images/2h_.png') }}" class="mr-2" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
                @guest
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="dashbord/#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset('dashbord/images/logo_2H_tech.png') }}" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif

                @else

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="dashbord/#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset('dashbord/images/logo_2H_tech.png') }}" alt="profile"/> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                        <a class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <a class="dropdown-item"    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            <i class="ti-power-off text-primary"></i>
                           {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    </div>
                </li>

                @endguest

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="ti-layout-grid2"></span>
        </button>
    </div>
</nav>

