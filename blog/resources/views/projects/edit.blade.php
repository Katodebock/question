@extends('layout')
@section('title', 'Edit Project')
@section('content')

<h1>edit project</h1>
<form action="/projects/{{ $project->id }}" method="post">
  @method('PATCH')
  @csrf
  <div class="field">
    <label for="title">title</label>
    <div class="control">
      <input type="text" name="title" placeholder="title" value="{{ $project->title }}">
    </div>
    <label for="description">description</label>
    <div class="control">
      <textarea name="description">{{ $project->description }}</textarea>
    </div>
  </div>
  <div class="field">
    <div class="Control">
      <button type="submit" name="button">update project</button>
    </div>
  </div>
</form>

<form action="/projects/{{ $project->id }}" method="post">
  @method('DELETE')
  @csrf
  <div class="Control">
    <button type="submit" name="button">delete project</button>
  </div>
</form>




@endsection
