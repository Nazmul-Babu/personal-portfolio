<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="personal" />
    <meta name="description" content="{{$title}}" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>{{$title}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png')}}" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css')}}">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper.min.css')}}" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    @method('css')
</head>

<body class="home-style-13">
    @yield('navbar')
    @yield('header')
    <main>
    @yield('about')
    @yield('services')
    @yield('projects')
    @yield('testimonials')
    @yield('contact')
    @yield('blog')
    </main>
    @yield('footer')

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>

  <!-- ====== request ====== -->
  <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/js/lib/pace.js') }}"></script>
    <script src="{{ asset('assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
  @method('js')
</body>

</html>
