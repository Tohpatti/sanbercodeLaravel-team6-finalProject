<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('malefashion-master/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion-master/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{asset('malefashion-master/img/icon/search.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('malefashion-master/img/icon/heart.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('malefashion-master/img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('malefashion-master/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('malefashion-master/js/mixitup.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('malefashion-master/js/main.js')}}"></script>
</body>

</html>