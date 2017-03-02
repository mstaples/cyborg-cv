<section @if( $selected == 'cv') class="selected" @else class="option" @endif>
    <a href="{{ url('cv') }}" class="nav-option" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead05.jpg') }}');">
        <h3 style="margin:10px; color:white">
            Cover Letter
        </h3>
    </header>
    <p>A brief introduction to coming availability and placement goals.</p>
    </a>
</section>

<section @if( $selected == 'skills') class="selected"@else class="option"  @endif>
    <a href="{{ url('skills') }}" class="nav-option" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead09.jpg') }}');">
        <h3 style="margin:10px; color:white">Skills</h3>
    </header>
    <p>An overview of extant skills and knowledges as well as information regarding desired growth areas.</p>
    </a>
</section>

<section @if( $selected == 'work') class="selected"@else class="option"  @endif>
    <a href="{{ url('work') }}" class="nav-option" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead07.jpg') }}');">
        <h3 style="margin:10px; color:white">Work History</h3>
    </header>
    <p>Summary history of professional roles, responsibilities, and accomplishments.</p>
    </a>
</section>

<section @if( $selected == 'hire') class="selected" @else class="option" @endif>
    <a href="{{ url('hire') }}" class="nav-option" style="text-decoration: none; color: inherit">
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead10.jpg') }}');">
        <h3 style="margin:10px; color:white">Hire Me</h3>
    </header>
    <p>Additional information useful for determining whether I am the right cyborg for your organization.</p>
    </a>
</section>

<section>
    <header style="background-image: url('{{ asset('css/images/light-bl.svg') }}'), url({{ asset('css/images/light-br.svg') }}), url('{{ asset('css/images/overlay.png') }}'), url('{{ asset('images/sectionHead10.jpg') }}');">
        <h3 style="margin:10px; color:white">
            <a href="https://github.com/mstaples" target="_blank" title="Github Profile" style="margin-right:5px;">
                <i class="fa fa-github-alt"></i>
            </a>
            <a href="https://www.meetup.com/seaphp" target="_blank" title="Local PHP Meetup" style="margin-right:5px;">
                <i class="fa fa-group"></i>
            </a>
            <a href="https://joind.in/user/deadlugosi/talks" target="_blank" title="Joind.in Talk Reviews" style="margin-right:5px;">
                <i class="fa fa-ticket"></i>
            </a>
            <a href="https://twitter.com/dead_lugosi" target="_blank" title="Personal Twitter Account" style="margin-right:5px;">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="{{ url('printable') }}" target="_blank" title="Print CV" style="margin-right:5px;">
                <i class="fa fa-print"></i>
            </a>
        </h3>
    </header>
    <p>
        <a href="#" class="email" data-toggle="modal" data-target="#copied">
            <i class="fa fa-envelope-o"></i> margaret.staples@gmail.com
        </a>
    </p>
</section>