<!-- Start Header Style -->
<header id="header" class="header">
    <div id="sticky-header-with-topbar" class="container-fluid hidden-xs sticky__header">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12">
                <div class="logo">
                    <a href="/"><img src="/images/logo/Kamilo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-lg-8">
                <div class="header__top">
                    <div class="header__top__left">
                        <p><span class="text-theme">Contact:</span><a href="/#">0088-234-675-827</a></p>
                        <p class="hidden-sm"><span class="text-theme">Opening Hours:</span> Mon - Sat 8.00 - 18.00. Sunday CLOSED</p>
                    </div>
                    <div class="header__top__right">
                        <ul class="login__regester">
                            @guest
                                <li><a class="modal-view button" href="/#" data-toggle="modal" data-target="#loginform"><i class="fa fa-account"></i>Login</a></li>
                                <li><a  class="modal-view button" href="/#" data-toggle="modal" data-target="#registrationform"><i class="fa fa-account-add"></i>Register</a></li>
                            @endguest

                            @auth
                                      <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="mainmenu__area">
                        <nav class="mainmenu__nav">
                            <ul class="main__menu">
                                <li class="drop"><a href="/">home</a>  </li>
                                <li><a href="/aboutus">about</a></li>

                                <li><a href="/ourgallery">gallery</a></li>

                                <li class="drop"><a href="/package">Packages</a>
                                    <ul class="dropdown">
                                        @foreach(\App\Models\Product::lastN(10) as $package)
                                        <li><a href="/package/{{$package->slug}}">{{$package->title}} </a></li>
                                        @endforeach

                                    </ul>
                                </li>

                                <li class="drop"><a href="/package">Destinations</a>
                                    <ul class="dropdown">
                                        @foreach(\App\Models\Destination::lastN(10) as $dest)
                                        <li><a href="/destination/{{$dest->slug}}">{{$dest->title}} </a></li>
                                        @endforeach

                                    </ul>
                                </li>

                                <li><a href="/contactus">contact</a></li>
                                @guest
                                <li><a class="modal-view button" href="/#" data-toggle="modal" data-target="#loginform"><i class="fa fa-account"></i>Login</a></li>
                                <li><a  class="modal-view button" href="/#" data-toggle="modal" data-target="#registrationform"><i class="fa fa-account-add"></i>Register</a></li>
                                @endguest

                                @auth
                                      <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-2 hidden-sm">
                <ul class="social__icon icon--position">
                    <li><a href="/https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="/https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="/https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="/https://plus.google.com/"><i class="fa fa-google"></i></a></li>
                    <li><a href="/https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Mobile-menu-area start -->
    <div class="mobile-menu-area hidden-md hidden-lg hidden-sm">
        <div class="fluid-container mobile-menu-container">
            <div class="mobile-logo"><a href="/"><img src="/images/logo/Kamilo.png" alt="Mobile logo"></a></div>
            <div class="mobile-menu clearfix">
                <nav id="mobile_dropdown">
                    <ul>
                        <li><a href="/l">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/package">Packages list</a></li>
                        <li><a href="/destination">Destinations list</a></li>

                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile-menu-area End -->
</header>
<!-- End Header Style -->
