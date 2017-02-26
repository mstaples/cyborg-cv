@section('sidebar')
<section>
    <a href="{{ url('cv') }}" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead05.jpg') }}');">
        <h3 style="margin:10px; color:white">
            Cover Letter
        </h3>
    </header>
    <p>A brief introduction to coming availability and placement goals.</p>
    </a>
</section>

    <section>
        <a href="{{ url('skills') }}" style="text-decoration: none; color: inherit">
        <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead09.jpg') }}');">
            <h3 style="margin:10px; color:white">Skills</h3>
        </header>
        <p>An overview of extant skills and knowledges as well as information regarding desired growth areas.</p>
        </a>
    </section>

<section>
    <a href="{{ url('work') }}" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead07.jpg') }}');">
        <h3 style="margin:10px; color:white">Work History</h3>
    </header>
    <p>Summary history of professional roles, responsibilities, and accomplishments.</p>
    </a>
</section>

<section>
    <a href="{{ url('hire') }}" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead10.jpg') }}');">
        <h3 style="margin:10px; color:white">Hire Me</h3>
    </header>
    <p>Additional information useful for determining whether I am the right cyborg for your organization.</p>
    </a>
</section>

<section>
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead10.jpg') }}');">
        <h3 style="margin:10px; color:white">
            <a href="#" target="_blank" title="Github Profile" style="margin-right:5px;"><i class="fa fa-github-alt"></i></a>
            <a href="#" target="_blank" title="Local PHP Meetup" style="margin-right:5px;"><i class="fa fa-group"></i></a>
            <a href="#" target="_blank" title="Joind.in Talk Reviews" style="margin-right:5px;"><i class="fa fa-ticket"></i></a>
            <a href="#" target="_blank" title="Personal Twitter Account" style="margin-right:5px;"><i class="fa fa-twitter"></i></a>
        </h3>
    </header>
    <p><i class="fa fa-envelope-o"></i> margaret.staples@gmail.com</p>
</section>
@endsection