@extends('layouts.cv')

@section('added-scripts')
    <script>
        $('#workTabs').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
@endsection

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic03.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Work History</h2>
        </header>
    </section>

    <ul class="nav nav-tabs" id="workTabs" style="margin-bottom:2em;">
        <li class="active"><a href="#web">Web</a></li>
        <li><a href="#games">Games</a></li>
        <li><a href="#other">Other Tech</a></li>
        <li><a href="#admin">Admin</a></li>
        <li><a href="#speaking">Speaking</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="web">@include('partials.work-web')</div>
        <div class="tab-pane" id="games">@include('partials.work-games')</div>
        <div class="tab-pane" id="other">@include('partials.work-other')</div>
        <div class="tab-pane" id="admin">@include('partials.work-admin')</div>
        <div class="tab-pane" id="speaking">@include('partials.work-speaking')</div>
    </div>
@endsection
