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
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('magnific-popup/dist/magnific-popup.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('templates/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="horizontal-main-wrapper">

        @include('applicant.layouts.header')

        <div class="main-content-innder">
            @include('applicant.layouts.flash')
            @yield('content')
        </div>

        
        @include('applicant.layouts.footer')
        
    </div>



    <!-- jquery latest version -->
    <script src="{{ asset('templates/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('templates/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ asset('templates/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('templates/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

        (function($) {

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
             let mainMenu = document.querySelector('.menu-main');
            
            
            if(window.innerWidth < 768) {
                mainMenu.style.display = 'none';
            }
            CKEDITOR.replace( 'myeditor' );

        })(jQuery);
    </script>

    @stack('scripts')
    
</body>

</html>
