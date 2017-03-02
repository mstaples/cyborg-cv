@foreach ($history as $id => $name)
    <div class="jobs" @if($id > 0) style="display:none" @endif  id="job-{{$id}}">
        @if ($id < count($history) - 1)
            <button data-job="job-{{ $id }}" class="btn btn-default pull-right next">Next <i class="fa fa-caret-right fa-lg"></i></button>
        @endif
        @if ($id > 0)
                <button data-job="job-{{ $id }}" class="btn btn-default pull-right back"><i class="fa fa-caret-left fa-lg"></i> Back</button>
        @endif
        <section>
            @include('partials.jobs.'.$name)
        </section>
        @if ($id < count($history) - 1)
            <button data-job="job-{{ $id }}" class="btn btn-default pull-right next">Next <i class="fa fa-caret-right fa-lg"></i></button>
        @endif
        @if ($id > 0)
            <button data-job="job-{{ $id }}" class="btn btn-default pull-right back"><i class="fa fa-caret-left fa-lg"></i> Back</button>
        @endif
    </div>
@endforeach