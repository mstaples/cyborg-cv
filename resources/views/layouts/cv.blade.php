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
                        <section>
                            <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                            <header>
                                <h3>Dolore Amet Consequat</h3>
                            </header>
                            <p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum massa. Morbi eu faucibus massa. Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.</p>
                            <p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum porta cursus justo. Quisque ultricies lorem in ligula condimentum, et egestas turpis sagittis. Cras ac nunc urna. Nullam eget lobortis purus. Phasellus vitae tortor non est placerat tristique. Sed id sem et massa ornare pellentesque. Maecenas pharetra porta accumsan. </p>
                            <p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem eget lacinia fringilla. Sed sed felis justo. Nunc sodales elit in laoreet aliquam. Nam gravida, nisl sit amet iaculis porttitor, risus nisi rutrum metus, non hendrerit ipsum arcu tristique est.</p>
                        </section>
                    </div>

                </div>
            </div>
        </section>
        
    </article>

</div>

</body>
</html>
