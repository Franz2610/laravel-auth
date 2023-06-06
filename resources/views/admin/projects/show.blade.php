@extends('layouts.admin')

@section('content')
<div>
    <h1> {{$project->name}} </h1>
    <img src="{{$project->image}}" alt="{{$project->name}}">
    <p> {{$project->bodytext}} </p>
    <a href=" {{route('admin.projects.index')}}">Project Start</a>
</div>

@endsection
