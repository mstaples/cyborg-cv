@extends('layouts.cv')

@include('partials.cv-sidebar')

@section('footer_content')
    <header>
        <h2>Are you <strong>hiring</strong>?</h2>
    </header>
    <footer>
        <ul class="buttons">
            <li><a href="{{ url('hire') }}" class="button special">Hire Me</a></li>
            <li><a href="{{ url('printable') }}" target="_blank" class="button">Print CV</a></li>
        </ul>
    </footer>
    @parent
@endsection
