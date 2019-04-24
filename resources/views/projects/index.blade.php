@extends('projects.projectlayout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Projects
        </div>
        <div class="links">
        @foreach($projects as $project)
           <ul><li><a href="projects/{{ $project->id }}">{{ $project->title }}</a></li></ul>
        @endforeach
        </div>
<br/>
        <a href="projects/create" type="submit" class="button is-primary" >Create Project</a>             
    </div>
</div>
        
@endsection('content')