<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Student Application System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="templates/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/slicknav.min.css') }}">    

    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('templates/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/assets/css/responsive.css') }}">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('templates/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    @guest('web')
        @yield('content')
    @else
    <!-- page container area start -->
    <div class="page-container">
        @include('admin.layouts.sidebar')

        <!-- main content area start -->
        <div class="main-content">
            @include('admin.layouts.header')
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ ucwords(Auth::guard('web')->user()->name) }} <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <!-- MAIN CONTENT -->
            @yield('content')

        </div>
        <!-- main content area end -->

        @include('admin.layouts.footer')

    </div>
    @endguest
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('templates/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('templates/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ asset('templates/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('templates/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap-datepicker.min.js') }}"></script>


    <script>
        (function($) {

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });            

            })(jQuery);
    </script>

    @stack('scripts')
    
</body>

</html>