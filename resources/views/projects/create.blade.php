@extends('projects.projectlayout')

@section('content')
<div class="flex-center position-ref full-height">
<div class="content">
    <div class="title m-b-md">Create Projects</div>
        <form method="POST" action="/projects">

            {{ csrf_field() }}
            <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
            <input type="text" name="title" placeholder="Project Title" value="{{ old('title') }}" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" required>
            </div>
            </div>
            <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">
            <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Project Description" required>{{ old('description') }}</textarea>
            </div>
            </div>
            <div class="field">
            <div class="control">
            <button type="submit" class="button is-primary">Create Project</button>
            </div>
            </div>
            @if($errors->any())
            
                <div class="notification is-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach    
                
            @endif
            </div>
        </form>
</div>
</div>
@endsection('content')
