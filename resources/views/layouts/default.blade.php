<!DOCTYPE HTML>
<html>
<head>
    <title>Cyborg Control Center</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    @section('styles')
        <link href='{{ asset('css/font-awesome.min.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/ie8.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/ie9.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/main.css') }}' rel='stylesheet' type='text/css'>
    @show

    <script type="text/javascript" src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrollgress.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jmain.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>

    <!--[if lte IE 8]><script type="text/javascript" src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="index">


<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1 id="logo"><a href="{{ url('/') }}">Cyborg Control</a></h1>
        <nav id="nav">
            @section('upper_nav')
                @if (Auth::check())
                    <ul>
                        <li class="submenu">
                            <a href="#">Controls</a>
                            <ul>
                                <li><a href="#">Create New</a></li>
                                <li><a href="#">Selected: Activate</a></li>
                                <li><a href="#">Selected: DeActivate</a></li>
                                <li><a href="#">Selected: Delete</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#">Reports</a>
                            <ul>
                                <li><a href="#">Today</a></li>
                                <li><a href="#">Week</a></li>
                                <li><a href="#">Month</a></li>
                                <li><a href="#">Quarter</a></li>
                                <li><a href="#">Year</a></li>
                                <li><a href="#">All Time</a></li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <ul>
                        <li class="current"><a href="{{ url('register') }}">Register</a></li>
                        <li><a href="{{ url('login') }}" class="button special">Login</a></li>
                    </ul>
                @endif
            @show
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner" style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/banners/'.$banner) }}')">

        <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
        -->
        <div class="inner">
            @section('upper_content')
                <header>
                    <h2>Cyborg</h2>
                </header>
                <p>Program * Monitor * Update<br/>
                    your <strong>personal</strong> cyborg.</p>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="#main" class="button fit scrolly">Browse Reports</a></li>
                    </ul>
                </footer>
            @show
        </div>

    </section>

    <!-- Main -->
    <article id="main">
        @section('lower_nav')
        @show
        @section('lower_content')
        <header class="special container">
            <span class="icon fa-bar-chart-o"></span></p>
        </header>

        <!-- One -->
        <section class="wrapper style2 container special-alt">
            <div class="row 50%">
                <div class="8u 12u(narrower)">

                    <header>
                        <h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button">Find Out More</a></li>
                        </ul>
                    </footer>

                </div>
                <div class="4u 12u(narrower) important(narrower)">

                    <ul class="featured-icons">
                        <li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
                        <li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
                        <li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
                        <li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
                        <li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
                        <li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
                    </ul>

                </div>
            </div>
        </section>

        @show
    </article>

    <section id="cta" style="background-image: url('{{ asset('css/images/light-tl.svg') }}'), url('{{ asset('css/images/light-tr.svg') }}'), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/banners/'.$banner) }}')">
        @section('footer_content')
        <header>
            <h2>Ready to do <strong>something</strong>?</h2>
            <p>In springtime, the only pretty ring time,
                When birds do sing, hey ding a ding, ding;
                Sweet lovers love the spring.</p>
        </header>
        <footer>
            <ul class="buttons">
                <li><a href="#" class="button special">Register</a></li>
                <li><a href="#" class="button">Browse Reports</a></li>
            </ul>
        </footer>
        @show
    </section>

    <footer id="footer">
        <ul class="copyright">
            <li>&copy; 2016 Cyborg Control Center by @dead_lugosi</li>
        </ul>
    </footer>

</div>

</body>
</html>
