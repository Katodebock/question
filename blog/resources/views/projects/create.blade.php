@extends('layout')
@section('title', 'Edit Project')
@section(content)
    <h1>create a new project</h1>

    <form method="POST" action="/projects" class="" action="index.html" method="post">
      @csrf
      <div class="">
        <input type="text" name="title" value="" placeholder="Project title">
      </div>
      <div class="">
        <textarea name="description" rows="8" cols="80" placeholder="Project description"></textarea>
      </div>
      <div class="">
        <button type="submit" name="button">Create project</button>
      </div>
    </form>
@endsection
