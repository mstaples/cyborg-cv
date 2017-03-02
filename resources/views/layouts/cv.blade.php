<!DOCTYPE HTML>
<html>
<head>
    <title>Cyborg CV</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    @section('styles')
        <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/bootstrap-theme.css') }}" rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/font-awesome.min.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/ie8.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/ie9.css') }}' rel='stylesheet' type='text/css'>
        <link href='{{ asset('css/main.css') }}' rel='stylesheet' type='text/css'>
    @show

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
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

        function copyThis(event) {
            event.preventDefault();
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val('<?php echo env('ADMIN_EMAIL') ?>').select();
            document.execCommand("copy");
            $temp.remove();
            window.setTimeout(function () {
                $("#copied").modal("hide");
            }, 1800);
        }

        function getCurrentStep(currentJob)
        {
            return parseInt(currentJob.replace("job-", ""));
        }

        function getNextId(currentJob)
        {
            var nextStep = getCurrentStep(currentJob) + 1;
            return 'job-'+nextStep;
        }

        function getBackId(currentJob)
        {
            var backStep = getCurrentStep(currentJob) - 1;
            return 'job-'+backStep;
        }

        $(document).ready(function() {
            $("a.email").click(function(event) {
                copyThis(event);
            });

            $('.active').on('click', 'button.next', function (e) {
                var next = getNextId($(this).attr("data-job"));
                $('.jobs').hide();
                console.log(next + ' is next');
                $('#'+next).show();
            }).on('click', 'button.back', function (e) {
                var back = getBackId($(this).attr("data-job"));
                $('.jobs').hide();
                console.log(back + ' is previous');
                $('#'+back).show();
            });
        });

    </script>
</head>
<body class="left-sidebar">

<div id="page-wrapper" style="background-image: url('{{ asset('css/images/overlay.png') }}')">
    <!-- Main -->
    <article id="main">

        <a href="{{ url('home') }}" style="text-decoration: none">
        <header class="special container" style="background-image: url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/banners/'.$banner) }}'); margin-bottom: 1.5em; color: white">
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
                        @include('partials.cv-sidebar')
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


    @include('partials.copied')
    <footer id="footer">
        <ul class="copyright">
            <li>
                <a href="#" class="email" data-toggle="modal" data-target="#copied">
                    <i class="fa fa-envelope-o"></i> margaret.staples@gmail.com
                </a>
            </li>
        </ul>
    </footer>
</div>

@yield('added-scripts')

</body>
</html>
