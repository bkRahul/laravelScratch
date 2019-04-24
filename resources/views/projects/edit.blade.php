@extends('projects.projectlayout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
            <div class="title m-b-md">
                    Edit Projects
                </div>
                <div class="form" >
                    <form method="POST" action="/projects/{{ $project->id }}">

                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="field">
                            <label class="label" for="title">Project Title</label>
                            <div class="control">
                        <input type="text" name="title" placeholder="Project Title" value="{{ $project->title }}" class="input" required>
                        </div></div>
                        <div class="field">
                            <label class="label" for="description">Project Description</label>
                            <div class="control">
                            <textarea name="description" placeholder="Project Description" class="textarea" required>{{ $project->description }}</textarea>
                            </div>
                        </div>
                            <div class="field">
                            <div class="control">
                        <button type="submit" class="button is-primary">Update Project</button>
                         </div></div>
                    </form>
                    <br/>
                    <form method="POST" action="/projects/{{ $project->id }}">

                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <div class="field">
                            <div class="control"> 
                        <button type="submit" class="button is-danger">Delete Project</button>
                         </div></div>
                    </form>
                </div>
            </div>
        </div>
@endsection('content')
