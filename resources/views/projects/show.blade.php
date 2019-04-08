@extends('projects.projectlayout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="m-b-md">
            <h3>{{ $project->title }}</h3>
        </div>
        <div class="sub-title m-b-md">
            <h5>{{ $project->description }}</h5>
        </div>

        @if($project->tasks->count())
        <div>
        @foreach($project->tasks as $task)

        <form method="POST" action="/tasks/{{ $task->id }}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <label class="checkbox {{( $task->completed ? 'iscomplete' : '' )}}" for="completed">
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{( $task->completed ? 'checked' : '' )}}>            
                    {{$task->description}}
            </label>
        </form>

        @endforeach

        </div>
        @endif

         <div><a href="{{ $project->id }}/edit">Edit</a></div>
    </div>
</div>

@endsection('content')
