<!DOCTYPE HTML>
<html>
<head>
    <title>Cyborg CV</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    @section('styles')
        <link href='{{ asset('css/font-awesome.min.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/ie8.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/ie9.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/main.css') }}' rel='stylesheet' type='text/css'>
    @show

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrollgress.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>

    <!--[if lte IE 8]><script type="text/javascript" src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="left-sidebar">


<div id="page-wrapper" style="background-image: url('{{ asset('css/images/overlay.png') }}')">
    <!-- Main -->
    <article id="main">

        <a href="{{ url('home') }}" style="text-decoration: none">
        <header class="special container" style="background-image: url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/banners/'.$banner) }}'); margin-bottom: 2em; color: white">
            <span class="icon fa-cogs"></span>
            <h2><strong>M. Staples</strong></h2>
            <p>01100011 01111001 01100010 01101111 01110010 01100111</p>
        </header>
        </a>

        <!-- One -->
        <section class="wrapper style4 container">

            <div class="row 150%">
                <div class="4u 12u(narrower)">

                    <!-- Sidebar -->
                    <div class="sidebar">
                        @yield('sidebar')
                    </div>

                </div>
                <div class="8u 12u(narrower) important(narrower)">

                    <!-- Content -->
                    <div class="content">
                        @yield('content')
                    </div>

                </div>
            </div>
        </section>
        
    </article>

</div>

</body>
</html>
