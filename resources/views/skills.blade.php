@extends('layouts.cv')

@section('added-scripts')
    <script>
        $('#skillTabs').find('a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
@endsection

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic01.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Skills</h2>
        </header>
    </section>

    <ul class="nav nav-tabs" id="skillTabs" style="margin-bottom:2em;">
        <li class="active"><a href="#code">Code</a></li>
        <li><a href="#lib">Tools</a></li>
        <li><a href="#ppl">Humans</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="code">@include('partials.skill-code')</div>
        <div class="tab-pane" id="lib">@include('partials.skill-lib')</div>
        <div class="tab-pane" id="ppl">@include('partials.skill-ppl')</div>
    </div>
@endsection
