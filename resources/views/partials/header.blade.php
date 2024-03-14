<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <ul class="list-unstyled d-flex align-items-center">
                                @if (Route::has('login'))
                                    @auth
                                    <li class="nav-item mr-2">
                                        <x-app-layout>
                                    
                                        </x-app-layout>
                                        
                                    </li>
                                    @else
                                    <li class="nav-item mr-3">
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item mr-3">
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                    @endauth
                                @endif
                                <li class="nav-item"><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="header__top__hover">
                            <span>Usd <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li>USD</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="#"><img src="{{asset('malefashion-master/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                        <li><a href="{{ route('about') }}">About</a>
                            {{-- <ul class="dropdown">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shop Details</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Check Out</a></li>
                                <li><a href="#">Blog Details</a></li>
                            </ul> --}}
                        </li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('malefashion-master/img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('malefashion-master/img/icon/heart.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('malefashion-master/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                    <div class="price">$0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
