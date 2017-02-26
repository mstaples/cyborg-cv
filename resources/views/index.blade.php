@extends('layouts.default')

@section('upper_content')
    <header>
        <h2>M.Staples</h2>
    </header>
    <p>Personally responsible<br/>
        sentient cyborg.<br/>
        Makes code happen.<br/>
    Has other skills as well.</p>
    <footer>
        <ul class="buttons vertical">
            <li><a href="{{ url('cv') }}" class="button fit scrolly">View Stats</a></li>
        </ul>
    </footer>
@endsection


@section('lower_nav')
    @parent
@endsection

@section('lower_content')
    <img src="{{ asset('images/gifs/'.$gif) }}" class="index-gif">
@endsection

@section('footer_content')
    <header>
        <h2>Are you <strong>hiring</strong>?</h2>
    </header>
    <footer>
        <ul class="buttons">
            <li><a href="{{ url('cv') }}" class="button special">Browse CV</a></li>
            <li><a href="{{ url('printable') }}" target="_blank" class="button">Print CV</a></li>
        </ul>
    </footer>
@endsection