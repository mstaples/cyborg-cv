@extends('layouts.cv')

@section('added-scripts')
    <script>
        $('#hireTabs').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
@endsection

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic01.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Hire</h2>
        </header>
    </section>

    <ul class="nav nav-tabs" id="hireTabs" style="margin-bottom:2em;">
        <li class="active"><a href="#ft">Hire</a></li>
        <li><a href="#tmp">Contract</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="ft">@include('partials.hire-ft')</div>
        <div class="tab-pane" id="tmp">@include('partials.hire-tmp')</div>
    </div>
@endsection
