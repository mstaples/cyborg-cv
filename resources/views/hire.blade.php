@extends('layouts.cv')

@include('partials.cv-sidebar')

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic04.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Hire Me</h2>
        </header>
        <div style="width: 100%; text-align:center">
            <h2><a class="fa fa-wheelchair-alt fa-spin fa-3x"></a></h2>
        </div>
    </section>
@endsection
