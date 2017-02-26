@extends('layouts.cv')

@include('partials.cv-sidebar')

@section('content')
    <section>
        <header style="background-size: cover; background-image: url('{{ asset('images/pic01.jpg') }}'); text-align:center">
            <h2 style="color:white; padding: 20px;">Cover Letter</h2>
        </header>
        <h3>Dear Human,</h3>
        <p>I am seeking a new arrangement to exchange the application of technical and interpersonal skills in the pursuit of externally determined goals for monetary and other compensation beginning June of this year.</p>
        <p>I am capable of finding solutions with extant code, created code, or without any code at all as needed by each situation.</p>
        <p>I dev, ops, system design, problem solve, and when needs be can kick around a bit of frontend.  I like linux and the command line is my comfort zone.</p>
        <p>Learning new technologies and practices is a delightful opportunity and never insurmountable.</p>
        <p>In addition to technical matters, interpersonal organizational skills such as hiring, teaching/training, and project management are all within my bailiwick.</p>
        <p>My abilities to give written and spoken presentations for publications and events are useful and sought after.</p>
        <p>These are things I could enjoy accomplishing for the benefit of your company if we find that our goals and expectations are compatible.</p>
        <p>I look forward to getting to know about your organization, future plans, and discover whether or not I might be the right cyborg addition to your team.</p>
        <div style="width:100%; padding: 20px; text-align: right">
            <h4>Thank you for your visit,</h4>
            <h3>M</h3>
        </div>
    </section>
@endsection
