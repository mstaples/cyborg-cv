@extends('layouts.cv')

@include('partials.cv-sidebar')

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic01.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Skills</h2>
        </header>
    </section>
    <section>
        <h3 style="margin-bottom: 5px;">Skill Category</h3>
        <h4 style="margin-bottom: 5px;">skillset subtitle?</h4>
        General description of skill category
        <ul>
            <li>
                <i class="fa fa-linux"></i> Particular skill or knowledge
            </li>
            <li>
                <i class="fa fa-linux"></i> Particular skill or knowledge
                <sup><a href="#" style="text-decoration: none; color: inherit; border: none;" title="Current area of interest / study"><i class="fa fa-book"></i></a></sup>
            </li>
            <li>
                <i class="fa fa-linux"></i> Particular skill or knowledge
            </li>
            <li>
                <i class="fa fa-linux"></i> Particular skill or knowledge
            </li>
        </ul>
    </section>
@endsection
