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


         <div><a href="{{ $project->id }}/edit" type="submit" class="button is-primary">Edit</a></div>
         <br/>
        @if($project->tasks->count())
        <div>
        @foreach($project->tasks as $task)
        <div class="box">
        <form method="POST" action="/tasks/{{ $task->id }}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <p><b>Tasks</b></p>
            <label class="checkbox {{( $task->completed ? 'iscomplete' : '' )}}" for="completed">
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{( $task->completed ? 'checked' : '' )}}>            
                    {{$task->description}}
            </label>
        </form>

        @endforeach

        </div>
        @endif

</div>



         <h3>Create Tasks</h3>
         <div class="box">
            <form method="POST" action="/projects/{{ $project->id }}/tasks">
            {{ csrf_field() }}
            <div class="field">
            <label class="label" for="description">New Task</label>
            <div class="control">
            <input type="text" name="description" placeholder="New Task" value="{{ old('description') }}" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" required>
            </div>
            </div>
            <div class="field">
            <div class="control">
            <button type="submit" class="button is-primary">Add Task </button>
            </div>
            </div>
            @include('projects.errors')         
            </form>
         </div>
    </div>
</div>

@endsection('content')
