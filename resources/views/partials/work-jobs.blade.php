@foreach ($history as $id => $name)
    <div class="jobs" @if($id > 0) style="display:none" @endif  id="job-{{$id}}">
        <div class="btn-group pull-right">
            <button
                    data-job="job-{{ $id }}"
                    class="btn btn-default back @if ($id == 0) disabled @endif"
                    title="Back">
                <i class="fa fa-caret-left fa-lg"></i>
            </button>
            <button
                    data-job="job-{{ $id }}"
                    class="btn btn-default next @if ($id == count($history) - 1) disabled @endif"
                    title="Next">
                <i class="fa fa-caret-right fa-lg"></i>
            </button>
        </div>

        <section>
            @include('partials.jobs.'.$name)
        </section>
        <div class="btn-group pull-left">
            <button
                    class="btn btn-default view-all"
                    title="View All">
                view all
            </button>
        </div>
        <div class="btn-group pull-right">
            <button
                    data-job="job-{{ $id }}"
                    class="btn btn-default back @if ($id == 0) disabled @endif"
                    title="Back">
                <i class="fa fa-caret-left fa-lg"></i>
            </button>
            <button
                    data-job="job-{{ $id }}"
                    class="btn btn-default next @if ($id == count($history) - 1) disabled @endif"
                    title="Next">
                <i class="fa fa-caret-right fa-lg"></i>
            </button>
        </div>
    </div>
@endforeach