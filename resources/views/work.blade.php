@extends('layouts.cv')

@include('partials.cv-sidebar')

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic03.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Work History</h2>
        </header>
    </section>
    <section>
        <h3 style="margin-bottom: 5px;">Company</h3>
        <h4 style="margin-bottom: 5px;">Title (dates)</h4>
        Role description in general terms.
        <ul>
            <li>
                <i class="fa fa-coffee"></i> Particular accomplishment or duty
            </li>
            <li>
                <i class="fa fa-coffee"></i> Particular accomplishment or duty
            </li>
            <li>
                <i class="fa fa-coffee"></i> Particular accomplishment or duty
            </li>
            <li>
                <i class="fa fa-coffee"></i> Particular accomplishment or duty
            </li>
        </ul>
    </section>
@endsection
