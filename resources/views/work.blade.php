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

    <ul class="nav nav-tabs" id="workTabs" style="margin-bottom:1em;">
        <li class="active"><a href="#work">Employment</a></li>
        <li><a href="#speaking">Speaking</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="work">@include('partials.work-jobs')</div>
        <div class="tab-pane" id="speaking">@include('partials.work-speaking')</div>
    </div>
@endsection
