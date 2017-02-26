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
<body class="index">


<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1 id="logo"><a href="{{ url('/') }}">M Staples</a></h1>
        <nav id="nav">
            @section('upper_nav')
                <ul>
                    <li><a href="{{ url('contact') }}" class="button special">Contact</a></li>
                </ul>
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
                    <h2>Ranting</h2>
                </header>
                <p>Sometimes you just<br/>
                    have to get it out<br/>
                    to move on.</p>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="{{ url('rant') }}" class="button fit scrolly">Read Rant</a></li>
                    </ul>
                </footer>
            @show
        </div>

    </section>

    <!-- Main -->
    <article id="main">
        <div class="outerlay">
            @section('overlay')
                <div class="overlay">
                </div>
            @show

            @section('lower_nav')
            @show
            @section('lower_content')
                <header class="special container">
                </header>
            @show
        </div>
    </article>

    <section id="cta" style="background-image: url('{{ asset('css/images/light-tl.svg') }}'), url('{{ asset('css/images/light-tr.svg') }}'), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/banners/'.$banner) }}')">
        @section('footer_content')
        @show
    </section>


    <footer id="footer">
        <ul class="copyright">
            <li>&copy;2017 @dead_lugosi</li>
        </ul>
    </footer>

</div>

</body>
</html>
