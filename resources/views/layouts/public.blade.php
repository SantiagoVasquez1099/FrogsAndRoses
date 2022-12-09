<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('global.site_title') }}</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    @yield('styles')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('public.index') }}" class="logo">
                            <img src="{{ asset('assets/images/logoWrite.png') }}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('public.index') }}"
                                    class="{{ request()->is('index') ? 'active' : '' }}">ACCUEIL</a>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('public.nous') }}"
                                    class="{{ request()->is('nous') ? 'active' : '' }}">CHEZ
                                    NOUS</a></li>

                            <li class="scroll-to-section"><a href="{{ route('public.menu') }}"
                                    class="{{ request()->is('menu') ? 'active' : '' }}">MENU</a>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('public.tapas') }}"
                                    class="{{ request()->is('tapas') ? 'active' : '' }}">TAPAS</a>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('public.images') }}"
                                    class="{{ request()->is('images') ? 'active' : '' }}">IMAGES</a>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('public.shop') }}"
                                    class="{{ request()->is('shop') ? 'active' : '' }}">SHOP</a>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('public.contact') }}"
                                    class="{{ request()->is('contact') ? 'active' : '' }}">CONTACT</a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- Main content -->
    <section class="main-content">
        @yield('content')
    </section>
    <!-- /.content -->
    @include('cookieConsent::index')

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://m.facebook.com/FrogsandRoses1930/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/frogsandroses19/" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="tel:0266640101" target="_blank"><i class="fa fa-phone"></i></a>
                            </li>
                            <li><a href="https://mail.google.com/mail/u/0/?hl=es&tf=cm&fs=1&to=contact@frogsandroses.ch"
                                    target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="logo">
                        <img src="assets/images/logo-Guia-removebg-preview.png" height="200px" width="150px">
                      </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Frogs&Roses 2015.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script async
        src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=856&amp;locationId=8766342&amp;lang=fr&amp;year=2022&amp;display_version=2"
        data-loadtrk onload="this.loadtrk=true"></script>
    <script async
        src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=336&amp;locationId=8766342&amp;lang=fr&amp;year=2022&amp;display_version=2"
        data-loadtrk onload="this.loadtrk=true"></script>
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

<script>
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 100,
        mobile: true,
        live: true
    });
    wow.init();

        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>
</body>

</html>
